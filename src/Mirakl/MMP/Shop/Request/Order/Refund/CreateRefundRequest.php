<?php
namespace Mirakl\MMP\Shop\Request\Order\Refund;

use Mirakl\MMP\OperatorShop\Domain\Order\Refund\RefundsCreated;
use Mirakl\MMP\OperatorShop\Request\Order\Refund\AbstractCreateRefundRequest;

/**
 * (OR28) Demand refunds on order lines
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
 * use Mirakl\MMP\Common\Domain\Order\Tax\OrderTaxAmount;
 * use Mirakl\MMP\OperatorShop\Domain\Collection\Order\Refund\CreateRefundCollection;
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Refund\CreateRefundRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $refund = new CreateRefund();
 * $refund->setAmount(10);
 * $refund->setReasonCode('18');
 * $refund->setOrderLineId('MMP-OL-3305999877');
 * $refund->setQuantity(1)
 * $refund->setShippingAmount(8);
 * $refund->setCurrencyIsoCode('EUR');
 *
 * $taxes = new OrderTaxAmountCollection();
 * $taxes->add(new OrderTaxAmount(0.12, 'TAX_A'));
 * $refund->setTaxes($taxes);
 *
 * $taxes = new OrderTaxAmountCollection();
 * $taxes->add(new OrderTaxAmount(0.07, 'TAX_B'));
 * $refund->setShippingTaxes($taxes);
 *
 * $collection = new CreateRefundCollection();
 * $collection->add($refund);
 * $request = new CreateRefundRequest($collection);
 *
 * $result = $api->refundOrder($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Order\Refund\RefundsCreated
 * </code>
 */
class CreateRefundRequest extends AbstractCreateRefundRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return RefundsCreated::decorator();
    }
}