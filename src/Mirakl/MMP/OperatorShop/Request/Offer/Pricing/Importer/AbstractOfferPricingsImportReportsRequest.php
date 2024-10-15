<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\Offer\Pricing\Importer;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\Offer\Pricing\Importer\OfferPricingsImportReportCollection;

/**
 * (PRI02) Get information and statistics about an offer pricing import
 *
 * @method string[]  getImportIds()
 * @method $this     setImportIds(string[] $importIds)
 * @method int       getShopId()
 * @method $this     setShopId(int $shopId)
 * @method \DateTime getStartDate()
 * @method $this     setStartDate(\DateTime $startDate)
 * @method \DateTime getEndDate()
 * @method $this     setEndDate(\DateTime $endDate)
 * @method string    getStatus()
 * @method $this     setStatus(string $status)
 * @method string[]  getOrigins()
 * @method $this     setOrigins(string[] $origins)
 */
abstract class AbstractOfferPricingsImportReportsRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/offers/pricing/imports';

    /**
     * @var array
     */
    public $queryParams = [
        'import_ids' => 'import_id',
        'shop_id',
        'start_date',
        'end_date',
        'status',
        'origins',
    ];

    /**
     * @var array
     */
    protected $duplicatedQueryParams = [
        'import_id',
        'origins',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new SeekableCollection(OfferPricingsImportReportCollection::class, 'data');
    }
}
