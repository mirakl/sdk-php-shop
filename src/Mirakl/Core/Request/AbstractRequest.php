<?php
namespace Mirakl\Core\Request;

use Mirakl\Core\Client\ApiClientInterface;
use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Domain\MiraklObject;
use Mirakl\Core\Exception\RequestValidationException;
use Mirakl\Core\Response\Decorator;
use Psr\Http\Message\ResponseInterface;

/**
 * @method string    getDir()
 * @method string    getSortBy()
 * @method int       getMax()
 * @method int       getOffset()
 * @method string    getPageToken()
 * @method int       getLimit()
 * @method bool      getPaginate()
 * @method array     getProductReferences()
 * @method \DateTime getStartDate()
 * @method \DateTime getEndDate()
 * @method string    getLocale()
 */
abstract class AbstractRequest extends MiraklObject implements RequestInterface
{
    /**
     * HTTP method (GET, POST, PUT, ...)
     *
     * @var string
     */
    protected $method = 'GET';

    /**
     * @var string
     */
    protected $endpoint = '/';

    /**
     * If true, request body will be encoded into JSON format
     *
     * @var bool
     */
    protected $json = true;

    /**
     * Request URI variables as an associative array
     *
     * Pattern:
     * [ '{uri_variable}' => 'data_key' ]
     *
     * Concrete example:
     * [ '{offer}' => 'offer_id' ]
     *
     * @var array
     */
    protected $uriVars = [];

    /**
     * @var array
     */
    protected $duplicatedQueryParams = [];

    /**
     * Array of query string parameters
     *
     * @var array
     */
    public $queryParams = [];

    /**
     * Array of request body parameters
     *
     * @var array
     */
    public $bodyParams = [];

    /**
     * Special parameters that can be 'true', 'false' or 'all'
     *
     * @var array
     */
    public $boolOrAllParams = [];

    /**
     * Used to send an application/x-www-form-urlencoded POST request
     *
     * @var array
     */
    public $formParams = [];

    /**
     * Request options
     *
     * @var array
     */
    protected $options = [];

    /**
     * If enabled, the null fields of the request data will be removed before being sent to Mirakl.
     *
     * @var bool
     */
    protected $cleanup = true;

    /**
     * @inheritdoc
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->init();
    }

    /**
     * @return void
     */
    protected function init()
    {
        $this->addOption('headers', ['Accept' => 'application/json']);
    }

    /**
     * @return  bool
     * @deprecated use haveQueryParamsDuplicated()
     */
    public function areQueryParamsDuplicated()
    {
        return $this->haveQueryParamsDuplicated();
    }

    /**
     * @return  bool
     */
    public function haveQueryParamsDuplicated()
    {
        return !empty($this->duplicatedQueryParams);
    }

    /**
     * @param   array   $params
     * @return  array
     */
    protected function buildParams(array $params)
    {
        if (empty($params)) {
            return [];
        }

        $mapping = [];
        foreach ($params as $key => $value) {
            $mapping[is_int($key) ? $value : $key] = $value;
        }

        $data = $this->toArray();

        if ($this->cleanup) {
            $data = \Mirakl\remove_null_values($data);
        }

        $params = array_intersect_key($data, $mapping);
        $params = \Mirakl\array_map_keys($params, $mapping);

        return $params;
    }

    /**
     * Verify that all required URI vars are present
     *
     * @return  void
     * @throws  RequestValidationException
     */
    protected function validateRequiredUriVars()
    {
        $diff = array_diff($this->uriVars, array_keys($this->data));
        if (!empty($diff)) {
            throw new RequestValidationException(
                sprintf('%s requires the following information: %s', __CLASS__, implode(', ', $this->uriVars))
            );
        }
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->buildParams($this->bodyParams);
    }

    /**
     * @inheritdoc
     */
    public function getFormParams()
    {
        return $this->buildParams($this->formParams);
    }

    /**
     * Get request query parameters that should be duplicated
     *
     * @return  array
     */
    public function getDuplicatedQueryParams()
    {
        return $this->duplicatedQueryParams;
    }

    /**
     * Returns the request endpoint to access an API
     *
     * @return  string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Returns the HTTP method used for current request
     *
     * @return  string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @inheritdoc
     */
    public function getQueryParams()
    {
        $params = $this->buildParams($this->queryParams);

        // Handle special boolean or ALL parameters
        foreach ($this->boolOrAllParams as $param) {
            $value = $this->getData($param);
            $params[$param] = (null !== $value) ?
                ($value ? 'TRUE' : 'FALSE') :
                'ALL';
        }

        /** @see PageableTrait */
        if (is_bool($this->getPaginate())) {
            $params['paginate'] = $this->getPaginate() ? 'true' : 'false';
            if ($this->getPaginate()) {
                $params['max'] = $this->getMax();
                $params['offset'] = $this->getOffset();
            }
        }

        if ($this->getPageToken()) {
            /** @see SeekableTrait */
            $params['page_token'] = $this->getPageToken();
        }

        if ($this->getLimit()) {
            $params['limit'] = $this->getLimit();
        }

        /** @see SortableTrait */
        if ($this->getSortBy()) {
            $params['sort'] = $this->getSortBy();
            if ($this->getPageToken()) {
                /** @see SeekableTrait */
                $params['sort'] .= ',' . ($this->getDir() ?: 'ASC');
            }
        }
        if ($this->getDir() && !$this->getPageToken()) {
            $params['order'] = strtolower($this->getDir());
        }

        /** @see DateRangeTrait */
        if ($this->getStartDate()) {
            $params['start_date'] = $this->getStartDate();
        }
        if ($this->getEndDate()) {
            $params['end_date'] = $this->getEndDate();
        }

        /** @see LocalizableTrait */
        if ($this->getLocale()) {
            $params['locale'] = $this->getLocale();
        }

        /** @see ProductReferencesTrait */
        if ($this->getProductReferences()) {
            $params['product_references'] = \Mirakl\refs_to_query_param($this->getProductReferences());
        }

        /**
         * Format boolean values as strings
         */
        array_walk($params, function(&$val) {
            if (is_bool($val)) {
                $val = $val ? 'true' : 'false';
            }
        });

        return $params;
    }

    /**
     * @inheritdoc
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Overrides all request options by specified ones
     *
     * @param   array   $options
     * @return  $this
     */
    public function setOptions(array $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Removes a specific option by key
     *
     * @param   string  $key
     * @return  $this
     */
    public function removeOption($key)
    {
        if (isset($this->options[$key])) {
            unset($this->options[$key]);
        }

        return $this;
    }

    /**
     * Add a request option
     *
     * @param   string  $key
     * @param   mixed   $value
     * @return  $this
     */
    public function addOption($key, $value)
    {
        if (isset($this->options[$key]) && is_array($this->options[$key])) {
            $value = array_merge($this->options[$key], $value);
        }

        $this->options[$key] = $value;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new Decorator\Closure(function (ResponseInterface $response) {

            $contentType = $response->getHeaderLine('Content-Type');
            if (strpos($contentType, 'application/json') === 0 || strpos($contentType, 'application/xml') === 0) {
                return new Decorator\AssocArray(); // default is to transform JSON or XML responses to associative array
            }

            return $response;
        });
    }

    /**
     * @inheritdoc
     */
    public function getUri()
    {
        $this->validateRequiredUriVars();

        $vars = array_map(function($var) {
            return $this->getData($var);
        }, $this->uriVars);

        $uri = strtr($this->getEndpoint(), $vars);

        return trim($uri, '/');
    }

    /**
     * @inheritdoc
     */
    public function isJSON()
    {
        return $this->json;
    }

    /**
     * @inheritdoc
     */
    public function run(ApiClientInterface $api)
    {
        return $this->getResponseDecorator()->decorate($api->run($this));
    }

    /**
     * @return  bool
     */
    public function getCleanup()
    {
        return $this->cleanup;
    }

    /**
     * @param   bool    $flag
     * @return  $this
     */
    public function setCleanup($flag)
    {
        $this->cleanup = (bool) $flag;

        return $this;
    }
}