<?php
namespace Mirakl\MCI\Common\Domain\Product;

class ProductImportWithTransformationStatus
{
    const TRANSFORMATION_WAITING = 'TRANSFORMATION_WAITING';
    const TRANSFORMATION_RUNNING = 'TRANSFORMATION_RUNNING';
    const TRANSFORMATION_FAILED  = 'TRANSFORMATION_FAILED';
    const TRANSFORMATION_QUEUED  = 'TRANSFORMATION_QUEUED';
    const WAITING                = 'WAITING';
    const QUEUED                 = 'QUEUED';
    const RUNNING                = 'RUNNING';
    const SENT                   = 'SENT';
    const COMPLETE               = 'COMPLETE';
    const CANCELLED              = 'CANCELLED';
    const FAILED                 = 'FAILED';
}