<?php
namespace Mirakl\MMP\Common\Domain\Message\Thread;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string              getDisplayName()
 * @method  $this               setDisplayName(string $displayName)
 * @method  ThreadOrganization  getOrganizationDetails()
 * @method  $this               setOrganizationDetails(ThreadOrganization|array $organizationDetails)
 * @method  string              getType()
 * @method  $this               setType(string $type)
 */
class ThreadSender extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'organization_details' => [ThreadOrganization::class, 'create'],
    ];
}