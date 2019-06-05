<?php
namespace Mirakl\MMP\Common\Domain\Order\Message;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getBody()
 * @method  $this   setBody(string $body)
 * @method  string  getCustomerEmail()
 * @method  $this   setCustomerEmail(string $email)
 * @method  string  getCustomerFirstname()
 * @method  $this   setCustomerFirstname(string $firstname)
 * @method  string  getCustomerLastname()
 * @method  $this   setCustomerLastname(string $lastname)
 * @method  string  getCustomerLocale()
 * @method  $this   setCustomerLocale(string $locale)
 * @method  string  getCustomerId()
 * @method  $this   setCustomerId(string $customerId)
 * @method  array   getDocumentIds()
 * @method  $this   setDocumentIds(array $documentIds)
 * @method  string  getSubject()
 * @method  $this   setSubject(string $subject)
 * @method  bool    getToCustomer()
 * @method  $this   setToCustomer(bool $toCustomer)
 * @method  bool    isToCustomer()
 * @method  bool    getToOperator()
 * @method  $this   setToOperator(bool $toOperator)
 * @method  bool    isToOperator()
 * @method  bool    getToShop()
 * @method  $this   setToShop(bool $toShop)
 * @method  bool    isToShop()
 */
class CreateOrderMessage extends MiraklObject
{}