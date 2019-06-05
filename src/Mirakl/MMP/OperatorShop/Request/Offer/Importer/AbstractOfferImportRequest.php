<?php
namespace Mirakl\MMP\OperatorShop\Request\Offer\Importer;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportTracking;

/**
 * (OF01) Import offers
 * NB. This API must be called with the OPERATOR role and the user must have the 'Shop modification' right
 *
 * @method  string  getImportMode()
 * @method  $this   setImportMode(string $mode)
 * @method  bool    getWithProducts()
 * @method  $this   setWithProducts(bool $flag)
 * @method  bool    isWithProducts()
 */
abstract class AbstractOfferImportRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/imports';

    /**
     * @var array
     */
    public $bodyParams = ['file', 'import_mode', 'with_products'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OfferImportTracking::decorator();
    }
}