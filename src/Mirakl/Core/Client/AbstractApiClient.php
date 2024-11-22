<?php

declare(strict_types=1);

namespace Mirakl\Core\Client;

use GuzzleHttp;
use Mirakl\Core\Domain\ArrayableInterface;
use Mirakl\Core\Domain\Collection\FileCollection;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\Core\Exception\ClientDisabledException;
use Mirakl\Core\Request\RequestInterface;
use Mirakl\Core\Stream\SplFileStream;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class AbstractApiClient implements ApiClientInterface
{
    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var GuzzleHttp\MessageFormatter
     */
    protected $messageFormatter;

    /**
     * @var string
     */
    protected $userAgent;

    /**
     * Won't send any request if client is disabled
     *
     * @var bool
     */
    protected $disabled = false;

    /**
     * Will return a promise response if enabled
     *
     * @var bool
     */
    protected $async = false;

    /**
     * Will return raw response if enabled
     *
     * @var bool
     */
    protected $raw = false;

    /**
     * Guzzle client object
     *
     * @var GuzzleHttp\ClientInterface
     */
    protected $client;

    /**
     * Requests history storage
     *
     * @var array
     */
    protected $history = [];

    /**
     * Request options
     *
     * @var array
     */
    protected $options = ['connect_timeout' => 5];

    /**
     * Handle query parameters that will be merged
     * with request parameters when executed
     *
     * @var array
     */
    public $queryParams = [];

    /**
     * @param string      $baseUrl
     * @param string|null $apiKey
     */
    public function __construct($baseUrl, $apiKey = null)
    {
        $this->setBaseUrl($baseUrl);
        if ($apiKey) {
            $this->setApiKey($apiKey);
        }
    }

    /**
     * @param string $name
     * @param array  $args
     * @return mixed
     * @throws \Exception
     */
    public function __call($name, $args)
    {
        /** @var RequestInterface $request */
        $request = $args[0];
        if (!$request instanceof RequestInterface) {
            throw new \InvalidArgumentException('First parameter must be an instance of ' . RequestInterface::class);
        }

        return $this->execute($request);
    }

    /**
     * Proxy to run() method
     *
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function __invoke(RequestInterface $request)
    {
        return $this->execute($request);
    }

    /**
     * Add a request option
     *
     * @param string $key
     * @param mixed  $value
     * @return $this
     */
    public function addOption($key, $value)
    {
        $this->options[$key] = $value;

        return $this;
    }

    /**
     * @param bool $flag
     * @return $this
     */
    public function async($flag = true)
    {
        $this->async = (bool) $flag;

        return $this;
    }

    /**
     * @param RequestInterface $request
     * @return array
     */
    public function buildRequestOptions(RequestInterface $request)
    {
        // Build Guzzle request options
        $options = array_merge_recursive($this->options, $request->getOptions());

        $queryParams = $this->queryParams + $request->getQueryParams();

        if ($request->haveQueryParamsDuplicated()) {
            // If query params are duplicated, specify them as string to Guzzle
            $simpleParams = array_diff_key($queryParams, array_flip($request->getDuplicatedQueryParams()));
            $duplicatedParams = array_intersect_key($queryParams, array_flip($request->getDuplicatedQueryParams()));

            $options['query'] = GuzzleHttp\Psr7\Query::build(array_merge($this->formatQueryParams($simpleParams), $duplicatedParams));
        } else {
            $options['query'] = $this->formatQueryParams($queryParams);
        }

        $bodyParams = $request->getBodyParams();
        if (!empty($bodyParams)) {
            if ($request->isJSON()) {
                $options['json'] = $this->formatBodyParamsJson($bodyParams);
            } else {
                $options['multipart'] = $this->formatBodyParamsMultipart($bodyParams);
            }
        }

        if (!isset($options['headers'])) {
            $options['headers'] = [];
        }

        $formParams = $request->getFormParams();
        if (!empty($formParams)) {
            $options['form_params'] = $formParams;
        }

        $options['headers']['X-Mirakl-Sdk-Uuid'] = uniqid('sdk_php_', true);
        $options['headers']['X-Mirakl-Sdk-Version'] = \Mirakl\get_version();

        if (!isset($options['sink'])) {
            $options['sink'] = new SplFileStream(new \SplTempFileObject());
        }

        return $options;
    }

    /**
     * @param bool $flag
     * @return $this
     */
    public function disable($flag = true)
    {
        $this->disabled = (bool) $flag;

        return $this;
    }

    /**
     * Executes specified request taking raw and async parameters into account
     *
     * @param RequestInterface $request
     * @return mixed
     */
    private function execute(RequestInterface $request)
    {
        if ($this->async) {
            return $this->runAsync($request);
        }

        return $this->raw ? $this->run($request) : $request->run($this);
    }

    /**
     * Formats body parameters for JSON requests
     *
     * @param array $bodyParams
     * @return array
     */
    private function formatBodyParamsJson(array $bodyParams)
    {
        $params = [];
        foreach ($bodyParams as $key => $value) {
            if ($value instanceof \SimpleXMLElement) {
                // Handle XML fields
                $value = $value->asXML();
            } elseif (is_object($value) && $value instanceof ArrayableInterface) {
                $value = $value->toArray();
            }
            $params[$key] = $value;
        }

        return $params;
    }

    /**
     * Formats body parameters for multipart requests
     *
     * @param array $bodyParams
     * @return array
     */
    private function formatBodyParamsMultipart(array $bodyParams)
    {
        $params = [];
        foreach ($bodyParams as $key => $value) {
            $headers = [];

            // Wrap \SplFileObject into a file object
            if ($value instanceof \SplFileObject) {
                $value = new FileWrapper($value);
            }

            // Handle single file in a file collection to use just after
            if ($value instanceof FileWrapper) {
                $value = (new FileCollection())->add($value);
            }

            // Handle files upload
            if ($value instanceof FileCollection) {
                foreach ($value as $file) {
                    $params[] = $this->formatPostFile($key, $file);
                }
                continue;
            }

            if ($value instanceof \SimpleXMLElement) {
                // Handle XML fields
                $value = $value->asXML();
            } elseif (is_array($value)) {
                // Handle other array fields as JSON
                $value = json_encode($value);
                $headers['Content-Type'] = 'application/json;charset=utf-8';
            } elseif (is_bool($value)) {
                // Convert boolean values to string manually because of Guzzle casting them to '0' or '1'
                $value = $value ? 'true' : 'false';
            }

            $params[] = [
                'name' => $key,
                'contents' => (string) $value,
                'headers' => $headers,
            ];
        }

        return $params;
    }

    /**
     * Formats file information for request
     *
     * @param string      $name
     * @param FileWrapper $file
     * @return array
     */
    private function formatPostFile($name, FileWrapper $file)
    {
        $file->getFile()->rewind();

        return [
            'name'     => $name,
            'filename' => $file->getFileName(),
            'contents' => @$file->getFile()->fread($file->getFile()->fstat()['size']),
            'headers'  => ['Content-Type' => 'application/octet-stream'],
        ];
    }

    /**
     * Formats params as query string params
     *
     * @param array $params
     * @return array
     */
    private function formatQueryParams(array $params)
    {
        foreach ($params as $key => $value) {
            if ($value instanceof \DateTime) {
                $value = \Mirakl\date_format($value);
            } elseif (is_array($value)) {
                if (\Mirakl\array_is_assoc($value)) {
                    array_walk($value, function (&$val, $key) {
                        $val = $key . '|' . $val;
                    });
                }
                $value = implode(',', $value);
            }
            $params[$key] = $value;
        }

        return $params;
    }

    /**
     * @return string|null
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @return GuzzleHttp\MessageFormatter
     */
    public function getMessageFormatter()
    {
        if (empty($this->messageFormatter)) {
            $this->messageFormatter = new GuzzleHttp\MessageFormatter();
        }

        return $this->messageFormatter;
    }

    /**
     * @return GuzzleHttp\Client
     */
    public function getClient()
    {
        if (!$this->client) {
            $this->client = $this->getDefaultClient();
        }

        return $this->client;
    }

    /**
     * @return GuzzleHttp\Client
     */
    protected function getDefaultClient()
    {
        return new GuzzleHttp\Client($this->getDefaultClientParams());
    }

    /**
     * @return array
     */
    protected function getDefaultClientParams()
    {
        $stack = GuzzleHttp\HandlerStack::create();
        $stack->push(GuzzleHttp\Middleware::history($this->history));

        $logger = $this->getLogger();
        if (!empty($logger)) {
            $stack->push(GuzzleHttp\Middleware::log($logger, $this->getMessageFormatter()));
        }

        $headers = [
            'User-Agent' => $this->getUserAgent() ?: static::getDefaultUserAgent(),
            'Accept'     => 'application/json',
        ];

        if ($this->getApiKey()) {
            $headers['Authorization'] = $this->getApiKey();
        }

        return [
            'handler'  => $stack,
            'base_uri' => rtrim($this->getBaseUrl(), '/') . '/',
            'headers'  => $headers,
        ];
    }

    /**
     * @return string
     */
    public static function getDefaultUserAgent()
    {
        return \Mirakl\default_user_agent(GuzzleHttp\default_user_agent());
    }

    /**
     * @return array
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Returns last request as a string for debugging purpose
     *
     * @return string
     */
    public function getLastRequestString()
    {
        return !empty($this->history) ? GuzzleHttp\Psr7\Message::toString(current($this->history)['request']) : '';
    }

    /**
     * Returns all request options
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Prepares and builds request promise before being executed
     *
     * @param RequestInterface $request
     * @return GuzzleHttp\Promise\PromiseInterface
     */
    private function prepareRequest(RequestInterface $request)
    {
        return $this->getClient()->requestAsync(
            $request->getMethod(),
            $request->getUri(),
            $this->buildRequestOptions($request)
        );
    }

    /**
     * @param bool $flag
     * @return $this
     */
    public function raw($flag = true)
    {
        $this->raw = (bool) $flag;

        return $this;
    }

    /**
     * Removes a specific option by key
     *
     * @param string $key
     * @return $this
     */
    public function removeOption($key)
    {
        if (isset($this->options[$key])) {
            unset($this->options[$key]);
        }

        return $this;
    }

    /**
     * Prepares and executes given request
     *
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function run(RequestInterface $request)
    {
        return $this->runAsync($request)->wait();
    }

    /**
     * Prepares given request without executing it
     *
     * @param RequestInterface $request
     * @return GuzzleHttp\Promise\PromiseInterface
     * @throws ClientDisabledException
     */
    public function runAsync(RequestInterface $request)
    {
        if ($this->disabled) {
            throw new ClientDisabledException('Mirakl API client is disabled');
        }

        return $this->prepareRequest($request);
    }

    /**
     * @param string $apiKey
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = (string) $apiKey;

        return $this;
    }

    /**
     * @param string $baseUrl
     * @return $this
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @param LoggerInterface             $logger
     * @param GuzzleHttp\MessageFormatter $messageFormatter
     * @return $this
     */
    public function setLogger(LoggerInterface $logger, GuzzleHttp\MessageFormatter $messageFormatter = null)
    {
        $this->logger = $logger;
        $this->messageFormatter = $messageFormatter;

        return $this;
    }

    /**
     * @param GuzzleHttp\MessageFormatter $messageFormatter
     * @return $this
     */
    public function setMessageFormatter(GuzzleHttp\MessageFormatter $messageFormatter)
    {
        $this->messageFormatter = $messageFormatter;

        return $this;
    }

    /**
     * @param GuzzleHttp\ClientInterface $client
     * @return $this
     */
    public function setClient(GuzzleHttp\ClientInterface $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Overrides all request options by specified ones
     *
     * @param array $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @param string $userAgent
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }
}
