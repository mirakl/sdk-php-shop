<?php
namespace Mirakl\MMP\Common\Request\Offer\State;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Offer\State\OfferStateCollection;

/**
 * (OF61) Get the list of the offer states configured on the platform
 *
 * (sorted by sortIndex, defined in the BO)
 *
 * @deprecated  Class deprecated since 1.6.0. Use GetOfferStateListRequest instead
 * @see         \Mirakl\MMP\Front\Request\Offer\State\GetOfferStateListRequest
 * @see         \Mirakl\MMP\Operator\Request\Offer\State\GetOfferStateListRequest
 * @see         \Mirakl\MMP\Shop\Request\Offer\State\GetOfferStateListRequest
 */
abstract class AbstractGetOfferStatesRequest extends AbstractRequest
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