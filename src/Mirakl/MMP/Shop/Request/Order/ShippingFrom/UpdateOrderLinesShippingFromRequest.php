<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\ShippingFrom;

use Mirakl\MMP\Common\Request\Order\ShippingFrom\AbstractUpdateOrderLinesShippingFromRequest;

/**
 * (OR07) Update order line shipping origin
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Common\Domain\Collection\Order\ShippingFrom\UpdateOrderLineShippingFromCollection;
 * use Mirakl\MMP\Common\Domain\Order\ShippingFrom\OrderLineShippingFrom;
 * use Mirakl\MMP\Common\Domain\Order\ShippingFrom\OrderLineShippingFromAddress;
 * use Mirakl\MMP\Common\Domain\Order\ShippingFrom\UpdateOrderLineShippingFrom;
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\ShippingFrom\UpdateOrderLinesShippingFromRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $address = new OrderLineShippingFromAddress();
 * $address->setStreet1('12');
 * $address->setStreet2('rue de Lübeck');
 * $address->setZipCode('75116');
 * $address->setCity('Paris');
 * $address->setState('Ile de France');
 * $address->setCountryIsoCode('FRA');
 *
 * $shippingFrom = new OrderLineShippingFrom();
 * $shippingFrom->setAddress($address);
 *
 * $orderLine = new UpdateOrderLineShippingFrom();
 * $orderLine->setId('ORDER_ID');
 * $orderLine->setShippingFrom($shippingFrom);
 *
 * $collection = new UpdateOrderLineShippingFromCollection();
 * $collection->add($orderLine);
 *
 * $request = new UpdateOrderLinesShippingFromRequest($collection);
 * $result = $api->updateShippingFrom($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Order\ShippingFrom\OrderLinesShippingFromUpdateResponse
 * </code>
 */
class UpdateOrderLinesShippingFromRequest extends AbstractUpdateOrderLinesShippingFromRequest
{
}
