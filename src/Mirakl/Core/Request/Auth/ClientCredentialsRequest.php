<?php

declare(strict_types=1);

namespace Mirakl\Core\Request\Auth;

use Mirakl\Core\Domain\Auth\ClientCredentials;
use Mirakl\Core\Request\AbstractRequest;

/**
 * @method string getClientId()
 * @method $this  setClientId(string $clientId)
 * @method string getClientSecret()
 * @method $this  setClientSecret(string $clientSecret)
 * @method string getGrantType()
 * @method $this  setGrantType(string $grantType)
 *
 * Example:
 *
 * <code>
 * <?php
 * require 'vendor/autoload.php';
 *
 * use Mirakl\Core\Request\Auth\ClientCredentialsRequest;
 * use Mirakl\Core\Client\AuthApiClient;
 *
 * try {
 *     $client = new AuthApiClient($authUrl);
 *     $request = new ClientCredentialsRequest($clientId, $clientSecret);
 *     $credentials = $client->getCredentials($request);
 *     // @see \Mirakl\Core\Domain\Auth\ClientCredentials
 * } catch (\GuzzleHttp\Exception\RequestException $e) {
 *     // => $e->getMessage();
 *     // => (string) $e->getResponse()->getBody();
 * } catch (\Exception | \GuzzleHttp\Exception\GuzzleException $e) {
 *     // => $e->getMessage();
 * }
 *
 * </code>
 */
class ClientCredentialsRequest extends AbstractRequest
{
    public const GRANT_TYPE = 'client_credentials';

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/oauth/token';

    /**
     * @var bool
     */
    protected $json = false;

    /**
     * @var string[]
     */
    public $formParams = [
        'grant_type',
        'client_id',
        'client_secret',
    ];

    /**
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct(string $clientId, string $clientSecret)
    {
        parent::__construct();

        $this->setClientId($clientId);
        $this->setClientSecret($clientSecret);
        $this->setGrantType(self::GRANT_TYPE);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ClientCredentials::decorator();
    }
}
