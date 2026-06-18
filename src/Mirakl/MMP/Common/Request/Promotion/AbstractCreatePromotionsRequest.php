<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Promotion;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\Promotion\CreatePromotions\ApplicationToCartCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\CreatePromotions\PublicDescriptionCollection;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Trigger;

/**
 * (PR03) Create a promotion
 *
 * @method ApplicationToCartCollection getApplicationToCart()
 * @method $this                       setApplicationToCart(array|ApplicationToCartCollection $applicationToCart)
 * @method array                       getChannelCodes()
 * @method $this                       setChannelCodes(array $channelCodes)
 * @method array                       getCustomerGroupIds()
 * @method $this                       setCustomerGroupIds(array $customerGroupIds)
 * @method array                       getCustomerOrganizationIds()
 * @method $this                       setCustomerOrganizationIds(array $customerOrganizationIds)
 * @method \DateTime                   getEndDate()
 * @method $this                       setEndDate(\DateTime $endDate)
 * @method string                      getInternalDescription()
 * @method $this                       setInternalDescription(string $internalDescription)
 * @method string                      getInternalId()
 * @method $this                       setInternalId(string $internalId)
 * @method PublicDescriptionCollection getPublicDescriptions()
 * @method $this                       setPublicDescriptions(array|PublicDescriptionCollection $publicDescriptions)
 * @method Reward                      getReward()
 * @method $this                       setReward(array|Reward $reward)
 * @method \DateTime                   getStartDate()
 * @method $this                       setStartDate(\DateTime $startDate)
 * @method Trigger                     getTrigger()
 * @method $this                       setTrigger(array|Trigger $trigger)
 */
#[ApiOperation('PR03')]
abstract class AbstractCreatePromotionsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/promotions';

    /**
     * @var array
     */
    public $bodyParams = [
        'application_to_cart',
        'channel_codes',
        'customer_group_ids',
        'customer_organization_ids',
        'end_date',
        'internal_description',
        'internal_id',
        'public_descriptions',
        'reward',
        'start_date',
        'trigger',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'application_to_cart' => [ApplicationToCartCollection::class, 'create'],
        'public_descriptions' => [PublicDescriptionCollection::class, 'create'],
        'reward'              => [Reward::class, 'factory'],
        'trigger'             => [Trigger::class, 'factory'],
    ];
}
