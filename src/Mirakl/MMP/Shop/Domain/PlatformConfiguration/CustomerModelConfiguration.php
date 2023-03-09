<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

class CustomerModelConfiguration extends MiraklObject
{
    /**
     * @return bool
     */
    public function getIsB2b()
    {
        return $this->getData('b2b');
    }

    /**
     * @param bool $isB2b
     * @return CustomerModelConfiguration
     */
    public function setIsB2b($isB2b)
    {
        return $this->setData('b2b', $isB2b);
    }

    /**
     * @return bool
     */
    public function getIsB2c()
    {
        return $this->getData('b2c');
    }

    /**
     * @param bool $isB2c
     * @return CustomerModelConfiguration
     */
    public function setIsB2c($isB2c)
    {
        return $this->setData('b2c', $isB2c);
    }
}