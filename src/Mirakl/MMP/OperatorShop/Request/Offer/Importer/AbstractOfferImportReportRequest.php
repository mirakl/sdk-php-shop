<?php
namespace Mirakl\MMP\OperatorShop\Request\Offer\Importer;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportResult;

/**
 * (OF02) Get import information and stats
 *
 * @method  string  getImportId()
 * @method  $this   setImportId(string $id)
 */
abstract class AbstractOfferImportReportRequest extends AbstractImportRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/imports/{import}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OfferImportResult::decorator();
    }
}