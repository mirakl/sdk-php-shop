<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Promotion;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\Promotion\UpdatePromotion\ApplicationToCartCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\UpdatePromotion\PublicDescriptionCollection;
use Mirakl\MMP\Common\Domain\Promotion\UpdatePromotion\Reward;
use Mirakl\MMP\Common\Domain\Promotion\UpdatePromotion\Trigger;

/**
 * (PR04) Update a promotion
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
 * @method string                      getPromotionInternalId()
 * @method $this                       setPromotionInternalId(string $promotionInternalId)
 * @method PublicDescriptionCollection getPublicDescriptions()
 * @method $this                       setPublicDescriptions(array|PublicDescriptionCollection $publicDescriptions)
 * @method Reward                      getReward()
 * @method $this                       setReward(array|Reward $reward)
 * @method \DateTime                   getStartDate()
 * @method $this                       setStartDate(\DateTime $startDate)
 * @method Trigger                     getTrigger()
 * @method $this                       setTrigger(array|Trigger $trigger)
 */
#[ApiOperation('PR04')]
abstract class AbstractUpdatePromotionRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/promotions/{promotion_internal_id}';

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
        'public_descriptions',
        'reward',
        'start_date',
        'trigger',
    ];

    /**
     * @var array
     */
    protected $uriVars = [
        '{promotion_internal_id}' => 'promotion_internal_id',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'application_to_cart' => [ApplicationToCartCollection::class, 'create'],
        'public_descriptions' => [PublicDescriptionCollection::class, 'create'],
        'reward'              => [Reward::class, 'create'],
        'trigger'             => [Trigger::class, 'create'],
    ];

    /**
     * @param string $promotionInternalId
     */
    public function __construct(string $promotionInternalId)
    {
        parent::__construct();
        $this->setPromotionInternalId($promotionInternalId);
    }
}
