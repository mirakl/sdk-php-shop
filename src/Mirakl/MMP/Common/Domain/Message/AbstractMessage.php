<?php
namespace Mirakl\MMP\Common\Domain\Message;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string                      getBody()
 * @method  $this                       setBody(string $body)
 * @method  MessageCustomerRecipient    getCustomerRecipient()
 * @method  \DateTime                   getDateCreated()
 * @method  string                      getId()
 * @method  $this                       setId(string $id)
 * @method  MessageShopRecipient        getShopRecipient()
 * @method  string                      getSubject()
 * @method  $this                       setSubject(string $subject)
 * @method  bool                        getToOperator()
 * @method  $this                       setToOperator(bool $flag)
 * @method  bool                        isToOperator()
 * @method  MessageUserSender           getUserSender()
 */
abstract class AbstractMessage extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'from_id'          => 'user_sender/id',
        'from_name'        => 'user_sender/name',
        'from_type'        => 'user_sender/type',
        'to_customer_id'   => 'customer_recipient/id',
        'to_customer_name' => 'customer_recipient/name',
        'to_shop_id'       => 'shop_recipient/id',
        'to_shop_name'     => 'shop_recipient/name',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer_recipient' => [MessageCustomerRecipient::class, 'create'],
        'shop_recipient'     => [MessageShopRecipient::class, 'create'],
        'user_sender'        => [MessageUserSender::class, 'create'],
    ];
}