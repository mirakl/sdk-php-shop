<?php
namespace Mirakl\MMP\FrontOperator\Request\Order\Cancelation;

use Mirakl\MMP\Common\Domain\Collection\Order\CancelationCreatedCollection;
use Mirakl\MMP\Common\Request\Order\Cancelation\AbstractCreateCancelationsRequest;

/**
 * (OR30) Demand cancelations on order lines
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Common\Domain\Order\Tax\OrderTaxAmount;
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Domain\Order\Cancelation\CreateCancelation;
 * use Mirakl\MMP\FrontOperator\Request\Order\Cancelation\CreateCancelationsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $createCancelation = new CreateCancelation();
 * $createCancelation->setAmount(10.00);
 * $createCancelation->setReasonCode('18');
 * $createCancelation->setOrderLineId('OR01-A-1');
 * $createCancelation->setQuantity(1);
 * $createCancelation->setShippingAmount(1.00);
 * $createCancelation->setCurrencyIsoCode('EUR');
 * $createCancelation->setShippingTaxes([new OrderTaxAmount(1.53, 'VAT')]);
 * $createCancelation->setTaxes([new OrderTaxAmount(0.98, 'GST')]);
 *
 * $request = new CreateCancelationsRequest([$createCancelation]);
 *
 * $result = $api->cancelOrderLines($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Order\CancelationCreatedCollection
 * </code>
 */
class CreateCancelationsRequest extends AbstractCreateCancelationsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CancelationCreatedCollection::decorator('cancelations');
    }
}