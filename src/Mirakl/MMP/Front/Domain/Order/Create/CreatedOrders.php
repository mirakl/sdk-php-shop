<?php
namespace Mirakl\MMP\Front\Domain\Order\Create;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\FrontOperator\Domain\Collection\Order\OrderCollection;
use Mirakl\MMP\Front\Domain\Collection\Order\Create\OfferNotShippableCollection;

/**
 * @method  OfferNotShippableCollection getOffersNotShippable()
 * @method  $this                       setOffersNotShippable(array|OfferNotShippableCollection $offersNotShippable)
 * @method  OrderCollection             getOrders()
 * @method  $this                       setOrders(array|OrderCollection $orders)
 */
class CreatedOrders extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'offers_not_shippable' => [OfferNotShippableCollection::class, 'create'],
        'orders'               => [OrderCollection::class, 'create'],
    ];
}