<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\MMP\Common\Request\Returns\AbstractReceiveReturnsRequest;

/**
 * (RT25) Validate returns as received
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Common\Domain\Collection\Returns\ReturnIdentifierCollection;
 * use Mirakl\MMP\Common\Domain\Returns\ReturnIdentifier;
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Returns\ReceiveReturnsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $returnIdentifier = new ReturnIdentifier();
 * $returnIdentifier->setId('af1a537d-3f8a-4bb4-a69c-08df8395ece6');
 *
 * $returnIdentifierCollection = new ReturnIdentifierCollection();
 * $returnIdentifierCollection->add($returnIdentifier);
 *
 * $request = new ReceiveReturnsRequest($returnIdentifierCollection);
 *
 * $result = $api->receiveReturns($request);
 * var_dump($result); // $result => @see \Mirakl\MMP\Common\Domain\Returns\ReturnWorkflowResponse
 * </code>
 */
class ReceiveReturnsRequest extends AbstractReceiveReturnsRequest
{
}
