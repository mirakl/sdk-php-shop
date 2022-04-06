<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\Order\Importer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImport;

/**
 * @method OfferImport current()
 * @method OfferImport first()
 * @method OfferImport get($offset)
 * @method OfferImport offsetGet($offset)
 * @method OfferImport last()
 */
class OfferImportCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferImport::class;
}