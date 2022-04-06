<?php
namespace Mirakl\MMP\Shop\Domain\Shop;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\ErrorCollection;

/**
 * @method ErrorCollection    getErrors()
 * @method $this              setErrors(ErrorCollection|array $errors)
 * @method UpdatedShopAccount getUpdated()
 * @method $this              setUpdated(UpdatedShopAccount|array $updated)
 */
class UpdatedShopAndError extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'errors'  => [ErrorCollection::class, 'create'],
        'updated' => [UpdatedShopAccount::class, 'create'],
    ];
}