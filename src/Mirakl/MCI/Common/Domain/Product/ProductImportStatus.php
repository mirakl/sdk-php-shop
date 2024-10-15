<?php

declare(strict_types=1);

namespace Mirakl\MCI\Common\Domain\Product;

class ProductImportStatus
{
    // Represents a complete integration of the import with or without errors
    public const COMPLETE = 'COMPLETE';

    // Represents a failed integration of the import
    public const FAILED   = 'FAILED';

    /** @deprecated */
    public const QUEUED   = 'QUEUED';
}
