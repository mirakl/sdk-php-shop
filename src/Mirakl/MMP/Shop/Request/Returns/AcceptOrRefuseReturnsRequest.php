<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\MMP\Common\Request\Returns\AbstractAcceptOrRefuseReturnsRequest;
use Mirakl\MMP\Shop\Domain\Returns\ReturnAcceptOrRefuseResponse;

/**
 * (RT21) Accept or refuse a return request
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Common\Domain\Collection\Returns\Workflow\AcceptOrRefuseReturnCollection;
 * use Mirakl\MMP\Common\Domain\Returns\Workflow\AcceptOrRefuseReturn;
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Returns\AcceptOrRefuseReturnsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $return = new AcceptOrRefuseReturn();
 * $return->setId('7a58942f-c463-4261-8f16-7834d320001d');
 * $return->setAccepted(false);
 * $return->setRejectionReasonCode('RETURN_REJECTION_NOT_ELIGIBLE');
 *
 * $returns = new AcceptOrRefuseReturnCollection();
 * $returns->add($return);
 *
 * $request = new AcceptOrRefuseReturnsRequest($returns);
 * $result = $api->acceptOrRefuseReturns($request);
 *
 * var_dump($result); // @see \Mirakl\MMP\Shop\Domain\Returns\ReturnAcceptOrRefuseResponse
 * </code>
 */
class AcceptOrRefuseReturnsRequest extends AbstractAcceptOrRefuseReturnsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ReturnAcceptOrRefuseResponse::decorator();
    }
}
