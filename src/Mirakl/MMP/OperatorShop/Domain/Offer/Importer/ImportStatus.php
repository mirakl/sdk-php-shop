<?php
namespace Mirakl\MMP\OperatorShop\Domain\Offer\Importer;

class ImportStatus
{
    const WAITING_SYNCHRONIZATION_PRODUCT = 'WAITING_SYNCHRONIZATION_PRODUCT';
    const WAITING                         = 'WAITING';
    const RUNNING                         = 'RUNNING';
    const COMPLETE                        = 'COMPLETE';
    const FAILED                          = 'FAILED';
}