<?php

declare(strict_types=1);

namespace Mirakl\Core\Client;

use Mirakl\Core\Domain\Auth\ClientCredentials;
use Mirakl\Core\Request\Auth\ClientCredentialsRequest;

class AuthApiClient extends AbstractApiClient
{
    /**
     * @param ClientCredentialsRequest $request
     * @return ClientCredentials
     */
    public function getCredentials(ClientCredentialsRequest $request): ClientCredentials
    {
        return $request->run($this);
    }
}
