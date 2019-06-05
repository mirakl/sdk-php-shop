<?php
namespace Mirakl\MMP\Common\Request\Promotion;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (PR01) List promotions information
 *
 * @method  \DateTime   getDateCreatedFrom()
 * @method  $this       setDateCreatedFrom(\DateTime $dateCreatedFrom)
 * @method  array       getChannelCodes()
 * @method  $this       setChannelCodes(array $channelCodes)
 * @method  \DateTime   getDateCreatedTo()
 * @method  $this       setDateCreatedTo(\DateTime $dateCreatedTo)
 * @method  \DateTime   getEndingAfter()
 * @method  $this       setEndingAfter(\DateTime $endingAfter)
 * @method  array       getRewardOfferIds()
 * @method  $this       setRewardOfferIds(array $rewardOfferIds)
 * @method  \DateTime   getStartingBefore()
 * @method  $this       setStartingBefore(\DateTime $startingBefore)
 * @method  array       getStates()
 * @method  $this       setStates(array $states)
 * @method  array       getTriggerOfferIds()
 * @method  $this       setTriggerOfferIds(array $triggerOfferIds)
 * @method  array       getTypes()
 * @method  $this       setTypes(array $types)
 */
abstract class AbstractGetPromotionsRequest extends AbstractRequest
{
    use LocalizableTrait;
    use PageableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/promotions';

    /**
     * @var array
     */
    public $queryParams = [
        'types',
        'states',
        'ending_after',
        'starting_before',
        'date_created_from',
        'date_created_to',
        'ids',
        'shop_ids',
        'reward_offer_ids',
        'trigger_offer_ids',
        'channel_codes',
    ];

    /**
     * @inheritdoc
     */
    public function getQueryParams()
    {
        $params = parent::getQueryParams();
        if (isset($params['channel_codes'])) {
            $params['channel_codes'] = \Mirakl\tuples_to_query_param($this->getChannelCodes());
        }
        if (isset($params['reward_offer_ids'])) {
            $params['reward_offer_ids'] = \Mirakl\tuples_to_query_param($this->getRewardOfferIds());
        }
        if (isset($params['trigger_offer_ids'])) {
            $params['trigger_offer_ids'] = \Mirakl\tuples_to_query_param($this->getTriggerOfferIds());
        }
        if (isset($params['types'])) {
            $params['types'] = \Mirakl\tuples_to_query_param($this->getTypes());
        }
        if (isset($params['states'])) {
            $params['states'] = \Mirakl\tuples_to_query_param($this->getStates());
        }

        return $params;
    }
}