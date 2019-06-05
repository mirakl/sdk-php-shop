<?php
namespace Mirakl\MMP\OperatorShop\Request\Offer;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\OperatorShop\Domain\Collection\Offer\UpdateOfferCollection;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportTracking;

/**
 * (OF24) Update offers
 *
 * @method  UpdateOfferCollection   getOffers()
 * @method  $this                   setOffers(array|UpdateOfferCollection $offers)
 */
abstract class AbstractUpdateOffersRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/offers';

    /**
     * @var array
     */
    public $bodyParams = ['offers'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'offers' => [UpdateOfferCollection::class, 'create'],
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OfferImportTracking::decorator();
    }
}