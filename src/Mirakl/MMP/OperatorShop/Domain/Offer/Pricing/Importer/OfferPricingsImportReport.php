<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Offer\Pricing\Importer;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime getDateCreated()
 * @method $this     setDateCreated(\DateTime $dateCreated)
 * @method bool      getHasErrorReport()
 * @method $this     setHasErrorReport(bool $hasErrorReport)
 * @method string    getImportId()
 * @method $this     setImportId(string $importId)
 * @method int       getLinesInError()
 * @method $this     setLinesInError(int $linesInError)
 * @method int       getLinesInSuccess()
 * @method $this     setLinesInSuccess(int $linesInSuccess)
 * @method int       getOffersInError()
 * @method $this     setOffersInError(int $offersInError)
 * @method int       getOffersUpdated()
 * @method $this     setOffersUpdated(int $offersUpdated)
 * @method string    getOrigin()
 * @method $this     setOrigin(string $origin)
 * @method string    getReasonStatus()
 * @method $this     setReasonStatus(string $reasonStatus)
 * @method int       getShopId()
 * @method $this     setShopId(int $shopId)
 * @method string    getStatus()
 * @method $this     setStatus(string $status)
 */
class OfferPricingsImportReport extends MiraklObject
{
}
