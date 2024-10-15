<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

/**
 * @method string getOrganizationId()
 * @method $this  setOrganizationId(string $organizationId)
 */
class CustomerOrganization extends AbstractCustomerOrganization
{
    /**
     * Alias for getOrganizationId()
     *
     * @return string
     */
    public function getId()
    {
        return $this->getOrganizationId();
    }

    /**
     * Alias for setOrganizationId()
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setOrganizationId($id);
    }
}
