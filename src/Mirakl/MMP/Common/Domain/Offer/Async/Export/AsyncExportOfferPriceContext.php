<?php
namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string[]   getChannelCodes()
 * @method  $this      setChannelCodes(string[] $channelCodes)
 * @method  \DateTime  getStartDate()
 * @method  $this      setStartDate(\DateTime $startDate)
 * @method  \DateTime  getEndDate()
 * @method  $this      setEndDate(\DateTime $endDate)
 * @method  string[]   getCustomerOrganizationIds()
 * @method  $this      setCustomerOrganizationIds(string[] $customerOrganizationIds)
 * @method  string[]   getCustomerGroupIds()
 * @method  $this      setCustomerGroupIds(string[] $customerGroupIds)
 */
class AsyncExportOfferPriceContext extends MiraklObject
{}