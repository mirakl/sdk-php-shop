<?php
namespace Mirakl\MMP\OperatorShop\Request\Offer\Importer;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\Order\Importer\OfferImportCollection;

/**
 * (OF04) Get offer imports information and stats
 *
 * @method string   getMode()
 * @method $this    setMode(string $mode)           One of \Mirakl\MMP\OperatorShop\Domain\Offer\Importer\ImportMode
 * @method string[] getOrigins()
 * @method $this    setOrigins(string[] $origins)   One or more among \Mirakl\MMP\OperatorShop\Domain\Offer\Importer\ImportOrigin
 * @method string   getShopId()
 * @method $this    setShopId(string $shopId)
 * @method string   getStatus()
 * @method $this    setStatus(string $status)       One of \Mirakl\MMP\OperatorShop\Domain\Offer\Importer\ImportStatus
 */
abstract class AbstractOffersImportsRequest extends AbstractRequest
{
    use DateRangeTrait;
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/offers/imports';

    /**
     * @var array
     */
    protected $duplicatedQueryParams = ['origins'];

    /**
     * @var array
     */
    public $queryParams = ['shop_id' ,'status', 'mode', 'origins'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new SeekableCollection(OfferImportCollection::class, 'data');
    }
}