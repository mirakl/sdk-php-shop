<?php
namespace Mirakl\MMP\Front\Request\Offer\State;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Front\Domain\Collection\Offer\State\OfferStateCollection;

/**
 * (OF61) Get the list of the offer states configured on the platform
 *
 * (sorted by sortIndex, defined in the BO)
 *
 * @method  bool    getActive()
 * @method  bool    isActive()
 * @method  $this   setActive(boolean $active)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Offer\State\GetOfferStateListRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetOfferStateListRequest();
 * $request->setActive(true);
 * $result = $api->getOfferStateList($request);
 * // $result => @see \Mirakl\MMP\Front\Domain\Collection\Offer\State\OfferStateCollection
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

    /**
     * @var array
     */
    public $queryParams = ['active'];
}