<?php
namespace Mirakl\MMP\Common\Domain\Order;

/**
 * @method string getOrganizationId()
 * @method $this  setOrganizationId(string $organizationId)
 */
class CustomerOrganization extends AbstractCustomerOrganization
{
    /**
     * @return  string
     */
    public function getId()
    {
        return $this->getOrganizationId();
    }

    /**
     * @param   string  $id
     * @return  $this
     */
    public function setId($id)
    {
        return $this->setOrganizationId($id);
    }
}