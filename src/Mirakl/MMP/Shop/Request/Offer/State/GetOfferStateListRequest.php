<?php
namespace Mirakl\MMP\Shop\Request\Offer\State;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Shop\Domain\Collection\Offer\State\OfferStateCollection;

/**
 * (OF61) Get the list of the offer states configured on the platform
 *
 * (sorted by sortIndex, defined in the BO)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $result = $api->getOfferStateList();
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Offer\State\OfferStateCollection
 * </code>
 */
class GetOfferStateListRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/offers/states';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OfferStateCollection::decorator('offer_states');
    }
}