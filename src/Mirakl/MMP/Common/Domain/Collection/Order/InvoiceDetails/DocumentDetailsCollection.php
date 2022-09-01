<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order\InvoiceDetails;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\InvoiceDetails\DocumentDetails;

/**
 * @method  DocumentDetails  current()
 * @method  DocumentDetails  first()
 * @method  DocumentDetails  get($offset)
 * @method  DocumentDetails  offsetGet($offset)
 * @method  DocumentDetails  last()
 */
class DocumentDetailsCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DocumentDetails::class;
}