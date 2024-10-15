<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Customer;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getCivility()
 * @method $this  setCivility(string $civility)
 * @method string getCustomerId()
 * @method $this  setCustomerId(string $customerId)
 * @method string getFirstname()
 * @method $this  setFirstname(string $firstname)
 * @method string getLastname()
 * @method $this  setLastname(string $lastname)
 * @method string getLocale()
 * @method $this  setLocale(string $locale)
 */
abstract class AbstractCustomer extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'customer_locale' => 'locale',
    ];

    /**
     * Alias for getCustomerId()
     *
     * @return string
     */
    public function getId()
    {
        return $this->getCustomerId();
    }

    /**
     * Alias for setCustomerId()
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setCustomerId($id);
    }
}
