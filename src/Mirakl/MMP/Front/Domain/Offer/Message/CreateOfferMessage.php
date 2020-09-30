<?php
namespace Mirakl\MMP\Front\Domain\Offer\Message;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Message\MessageCustomer;

/**
 * @method  string          getBody()
 * @method  $this           setBody(string $body)
 * @method  MessageCustomer getCustomer()
 * @method  $this           setCustomer(array|MessageCustomer $customer)
 * @method  string          getSubject()
 * @method  $this           setSubject(string $subject)
 * @method  bool            getVisible()
 * @method  $this           setVisible(bool $flag)
 * @method  bool            isVisible()
 */
class CreateOfferMessage extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'customer_id'        => 'customer/customer_id',
        'customer_civility'  => 'customer/civility',
        'customer_firstname' => 'customer/firstname',
        'customer_lastname'  => 'customer/lastname',
        'customer_email'     => 'customer/email',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer' => [MessageCustomer::class, 'create'],
    ];
}