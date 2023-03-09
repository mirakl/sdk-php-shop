<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool  getIsMarketplace() // Is Marketplace platform model activated
 * @method $this setIsMarketplace(bool $isMarketplace)
 * @method bool  getIsDropShip() // Is DropShip platform model activated
 * @method $this setIsDropShip(bool $isDropShip)
 * @method bool  getIsOneCreditor() // Is One Creditor platform model activated
 * @method $this setIsOneCreditor(bool $isOneCreditor)
 */
class PlatformModelConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'drop_ship'    => 'is_drop_ship',
        'one_creditor' => 'is_one_creditor',
        'marketplace'  => 'is_marketplace',
    ];
}