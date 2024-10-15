<?php

declare(strict_types=1);

namespace Mirakl\Core\Domain\Auth;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getAccessToken()
 * @method $this  setAccessToken(string $accessToken)
 * @method int    getExpiresIn()
 * @method $this  setExpiresIn(int $expiresIn)
 * @method string getMarketplaceId()
 * @method $this  setMarketplaceId(string $marketplaceId)
 * @method string getTokenType()
 * @method $this  setTokenType(string $tokenType)
 */
class ClientCredentials extends MiraklObject
{
}
