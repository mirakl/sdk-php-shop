<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Offer\Importer;

class ImportStatus
{
    public const WAITING_SYNCHRONIZATION_PRODUCT = 'WAITING_SYNCHRONIZATION_PRODUCT';
    public const WAITING                         = 'WAITING';
    public const RUNNING                         = 'RUNNING';
    public const COMPLETE                        = 'COMPLETE';
    public const FAILED                          = 'FAILED';

    /** @deprecated */
    public const QUEUED                          = 'QUEUED';
}
