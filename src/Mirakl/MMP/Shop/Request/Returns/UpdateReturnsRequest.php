<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\MMP\OperatorShop\Domain\Collection\Returns\UpdateReturnCollection;
use Mirakl\MMP\OperatorShop\Request\Returns\AbstractUpdateReturnsRequest;
use Mirakl\MMP\Shop\Domain\Returns\UpdateReturnsResponse;

/**
 * (RT04) Patch update returns
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\OperatorShop\Domain\Collection\Returns\UpdateReturnCollection;
 * use Mirakl\MMP\OperatorShop\Domain\Returns\UpdateReturn;
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Returns\UpdateReturnsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $updateReturn = new UpdateReturn();
 * $updateReturn->setId('b508b41d-fc06-469f-a444-e7bbc3363906');
 * $updateReturn->setRma('RETURN_RMA');
 *
 * $updateReturns = new UpdateReturnCollection();
 * $updateReturns->add($updateReturn);
 *
 * $update = new UpdateReturnsRequest($updateReturns);
 * $result = $api->updateReturns($update);
 *
 * var_dump($result); // $result => @see \Mirakl\MMP\Shop\Domain\Returns\UpdateReturnsResponse
 * </code>
 *
 * @method UpdateReturnCollection getUpdateReturns()
 * @method $this                  setUpdateReturns(UpdateReturnCollection|array $updateReturns)
 */
class UpdateReturnsRequest extends AbstractUpdateReturnsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return UpdateReturnsResponse::decorator();
    }
}
