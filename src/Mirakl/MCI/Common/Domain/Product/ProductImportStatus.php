<?php
namespace Mirakl\MCI\Common\Domain\Product;

class ProductImportStatus
{
    /**
     * Represents a complete integration of the import with or without errors
     */
    const COMPLETE  = 'COMPLETE';

    /**
     * Represents a failed integration of the import
     */
    const FAILED    = 'FAILED';
}