<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getType()
 * @method $this  setType(string $type)
 * @method string getInformation()
 * @method $this  setInformation(string $information)
 */
class InvoiceUser extends MiraklObject
{
    public const INVOICE_USER_ORIGINS = [
        'OPERATOR',
        'BATCH',
        'PARTNER',
    ];
}
