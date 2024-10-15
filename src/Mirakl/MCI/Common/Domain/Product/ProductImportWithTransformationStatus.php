<?php

declare(strict_types=1);

namespace Mirakl\MCI\Common\Domain\Product;

class ProductImportWithTransformationStatus
{
    public const TRANSFORMATION_WAITING = 'TRANSFORMATION_WAITING';
    public const TRANSFORMATION_RUNNING = 'TRANSFORMATION_RUNNING';
    public const TRANSFORMATION_FAILED  = 'TRANSFORMATION_FAILED';
    public const WAITING                = 'WAITING';
    public const RUNNING                = 'RUNNING';
    public const SENT                   = 'SENT';
    public const COMPLETE               = 'COMPLETE';
    public const CANCELLED              = 'CANCELLED';
    public const FAILED                 = 'FAILED';

    /** @deprecated */
    public const TRANSFORMATION_QUEUED  = 'TRANSFORMATION_QUEUED';

    /** @deprecated */
    public const QUEUED                 = 'QUEUED';
}
