<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method DocumentRequestShippingFromAddress getAddress()
 * @method $this                              setAddress(DocumentRequestShippingFromAddress|array $address)
 */
class DocumentRequestShippingFrom extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address' => [DocumentRequestShippingFromAddress::class, 'create'],
    ];
}
