<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\Offer\Stock\Importer;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\MMP\OperatorShop\Domain\Offer\Stock\Importer\OfferStocksImportTracking;

/**
 * (STO01) Import a stock file
 *
 * @method int   getShop()
 * @method $this setShop(int $shop)
 */
abstract class AbstractOfferStocksImportRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/stock/imports';

    /**
     * @var array
     */
    public $bodyParams = ['shop', 'file'];

    /**
     * @param string|array|\SplFileObject $file
     * @param int                         $shop
     */
    public function __construct($file, $shop)
    {
        parent::__construct($file);
        $this->setShop($shop);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OfferStocksImportTracking::decorator();
    }
}
