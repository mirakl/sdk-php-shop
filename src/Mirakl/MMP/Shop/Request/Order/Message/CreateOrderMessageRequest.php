<?php
namespace Mirakl\MMP\Shop\Request\Order\Message;

use Mirakl\MMP\Common\Request\Order\Message\AbstractCreateOrderMessageRequest;

/**
 * (OR42) Post a message on an order
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Message\CreateOrderMessageRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new CreateOrderMessageRequest('ORDER_ID', [
 *     'subject'            => 'Hey!',
 *     'body'               => 'I'm happy with the delivery!',
 *     'customer_id'        => 'DSIFEZK',
 *     'customer_email'     => 'foo@bar.com',
 *     'customer_firstname' => 'Hap',
 *     'customer_lastname'  => 'Py',
 *     'to_shop'            => true,
 *     'to_customer'        => false,
 *     'to_operator'        => true,
 * ]);
 * $result = $api->createOrderMessage($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Message\MessageCreated
 * </code>
 */
class CreateOrderMessageRequest extends AbstractCreateOrderMessageRequest
{}