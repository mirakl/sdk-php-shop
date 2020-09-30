<?php
namespace Mirakl\MCM\Front\Domain\Product\Synchronization;

/**
 * @method bool   isArchived()
 * @method $this  setArchived(bool $failed)
 * @method int    getFailed()
 * @method $this  setFailed(int $failed)
 * @method bool   isHasReport()
 * @method $this  setHasReport(bool $hasReport)
 * @method bool   isPartialRead()
 * @method $this  setPartialRead(bool $partialRead)
 * @method int    getProcessed()
 * @method $this  setProcessed(int $processed)
 * @method string getStatus()
 * @method $this  setStatus(string $status)
 * @method int    getSucceeded()
 * @method $this  setSucceeded(int $succeeded)
 */
class ProductSynchronizationStatus extends ProductSynchronizeTracking
{}