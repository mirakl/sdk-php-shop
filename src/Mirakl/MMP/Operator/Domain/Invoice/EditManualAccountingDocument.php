<?php
namespace Mirakl\MMP\Operator\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Operator\Domain\Collection\Invoice\ManualAccountingDocumentLineCollection;

/**
 * @method  \DateTime                               getEmissionDate()
 * @method  $this                                   setEmissionDate(\DateTime $emissionDate)
 * @method  string                                  getId()
 * @method  $this                                   setId(string $id)
 * @method  bool                                    getIssued()
 * @method  $this                                   setIssued(bool $issued)
 * @method  bool                                    isIssued()
 * @method  ManualAccountingDocumentLineCollection  getLines()
 * @method  $this                                   setLines(array|ManualAccountingDocumentLineCollection $lines)
 * @method  string                                  getShopId()
 * @method  $this                                   setShopId(string $shopId)
 * @method  string                                  getType()
 * @method  string                                  setType(string $type)
 */
class EditManualAccountingDocument extends MiraklObject
{
    const TYPE_INVOICE = 'INVOICE';
    const TYPE_CREDIT  = 'CREDIT';

    /**
     * @var array
     */
    protected static $dataTypes = [
        'lines' => [ManualAccountingDocumentLineCollection::class, 'create'],
    ];
}