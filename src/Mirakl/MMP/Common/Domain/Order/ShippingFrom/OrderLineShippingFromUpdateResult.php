<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\ShippingFrom;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\ErrorCollection;

/**
 * @method ErrorCollection       getErrors()
 * @method $this                 setErrors(array|ErrorCollection $errors)
 * @method string                getId()
 * @method $this                 setId(string $id)
 * @method OrderLineShippingFrom getUpdated()
 * @method $this                 setUpdated(array|OrderLineShippingFrom $updated)
 */
class OrderLineShippingFromUpdateResult extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'errors'  => [ErrorCollection::class, 'create'],
        'updated' => [OrderLineShippingFrom::class, 'create'],
    ];
}
