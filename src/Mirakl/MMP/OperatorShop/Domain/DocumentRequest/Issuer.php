<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string       getType()
 * @method $this        setType(string $type)
 * @method Organization getOrganization()
 * @method $this        setOrganization(Organization|array $organization)
 */
class Issuer extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'organization' => [Organization::class, 'create'],
    ];
}