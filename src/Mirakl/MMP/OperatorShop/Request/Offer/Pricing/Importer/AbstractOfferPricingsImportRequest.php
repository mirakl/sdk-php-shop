<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\Offer\Pricing\Importer;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\MMP\OperatorShop\Domain\Offer\Pricing\Importer\OfferPricingsImportTracking;

/**
 * (PRI01) Import a price file
 *
 * @method int   getShop()
 * @method $this setShop(int $shop)
 */
abstract class AbstractOfferPricingsImportRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/pricing/imports';

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
        return OfferPricingsImportTracking::decorator();
    }
}
