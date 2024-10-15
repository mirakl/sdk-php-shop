<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Promotion;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (PR01) List promotions information
 *
 * @method string[]  getChannelCodes()
 * @method $this     setChannelCodes(string[] $channelCodes)
 * @method \DateTime getDateCreatedFrom()
 * @method $this     setDateCreatedFrom(\DateTime $dateCreatedFrom)
 * @method \DateTime getDateCreatedTo()
 * @method $this     setDateCreatedTo(\DateTime $dateCreatedTo)
 * @method \DateTime getEndingAfter()
 * @method $this     setEndingAfter(\DateTime $endingAfter)
 * @method \DateTime getLastRequestDate()
 * @method $this     setLastRequestDate(\DateTime $lastRequestDate)
 * @method string[]  getRewardOfferIds()
 * @method $this     setRewardOfferIds(string[] $rewardOfferIds)
 * @method \DateTime getStartingBefore()
 * @method $this     setStartingBefore(\DateTime $startingBefore)
 * @method string[]  getStates()
 * @method $this     setStates(string[] $states)
 * @method string[]  getTriggerOfferIds()
 * @method $this     setTriggerOfferIds(string[] $triggerOfferIds)
 * @method string[]  getTypes()
 * @method $this     setTypes(string[] $types)
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
        'last_request_date',
        'shop_ids',
        'reward_offer_ids',
        'trigger_offer_ids',
        'channel_codes',
        'campaign_identifiers',
    ];
}
