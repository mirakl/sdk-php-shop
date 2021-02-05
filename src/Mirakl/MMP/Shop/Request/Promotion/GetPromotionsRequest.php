<?php
namespace Mirakl\MMP\Shop\Request\Promotion;

use Mirakl\MMP\Common\Request\Promotion\AbstractGetPromotionsRequest;
use Mirakl\MMP\Shop\Domain\Collection\Promotion\PromotionCollection;

/**
 * (PR01) List promotions information
 *
 * @method  array   getIds()
 * @method  $this   setIds(array $ids)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Domain\Collection\Promotion\PromotionCollection;
 * use Mirakl\MMP\Shop\Domain\Promotion\Promotion;
 * use Mirakl\MMP\Shop\Request\Promotion\GetPromotionsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new GetPromotionsRequest();
 * $request->setIds([new PromotionIdentifier('1', '2'), new PromotionIdentifier('3', '4')])
 *  ->setStates([Promotion::STATE_ACTIVE, Promotion::STATE_PENDING])
 *  ->setTypes([Promotion::TYPE_AMOUNT_OFF, Promotion::TYPE_FREE_ITEMS])
 *  ->setDateCreatedFrom($this->createDateTime('2016-10-12 15:45:12'))
 *  ->setDateCreatedTo($this->createDateTime('2017-10-12 15:45:12'))
 *  ->setEndingAfter($this->createDateTime('2018-10-12 15:45:12'))
 *  ->setStartingBefore($this->createDateTime('2019-10-12 15:45:12'))
 *  ->setLocale('en_US')
 *  ->setTriggerOfferIds(['1100', '1101'])
 *  ->setRewardOfferIds(['2200', '2201'])
 *  ->setChannelCodes(['CA', 'FR'])
 *  ->setMax(5)
 *  ->setOffset(1)
 *  ->setSortBy('dateCreated')
 *  ->sortAsc();
 *
 * $result = $api->getPromotions($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Promotion\PromotionCollection
 * </code>
 */
class GetPromotionsRequest extends AbstractGetPromotionsRequest
{
    /**
     * @inheritdoc
     */
    public function getQueryParams()
    {
        $params = parent::getQueryParams();
        if (isset($params['ids'])) {
            $params['ids'] = \Mirakl\tuples_to_query_param($this->getIds());
        }

        return $params;
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return PromotionCollection::decorator('promotions');
    }
}