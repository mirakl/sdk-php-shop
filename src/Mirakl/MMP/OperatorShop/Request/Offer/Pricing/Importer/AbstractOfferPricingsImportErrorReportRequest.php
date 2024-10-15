<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\Offer\Pricing\Importer;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (PRI03) Get the error report for a price import in CSV format
 *
 * @method string getImportId()
 * @method $this  setImportId(string $importId)
 */
abstract class AbstractOfferPricingsImportErrorReportRequest extends AbstractRequest
{
    use CsvResponseDecorator;

/**
     * @var string
     */


    protected $endpoint = '/offers/pricing/imports/{import_id}/error_report';

    /**
     * @var array
     */
    protected $uriVars = [
        '{import_id}' => 'import_id',
    ];

    /**
     * @param string $importId
     */
    public function __construct($importId)
    {
        parent::__construct();

        $this->setImportId($importId);
    }
}
