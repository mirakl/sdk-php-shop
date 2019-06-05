<?php
namespace Mirakl\MMP\Shop\Request\Promotion;

use Mirakl\MMP\Common\Request\Promotion\AbstractGetPromotionsRequest;
use Mirakl\MMP\Shop\Domain\Collection\Promotion\PromotionCollection;

/**
 * (PR01) List promotions information
 *
 * @method  array   getIds()
 * @method  $this   setIds(array $ids)
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