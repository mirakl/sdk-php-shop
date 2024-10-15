<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string             getId()
 * @method $this              setId(string $id)
 * @method string             getType()
 * @method $this              setType(string $type)
 * @method IssuerOrganization getOrganization()
 * @method $this              setOrganization(IssuerOrganization|array $organization)
 */
class Issuer extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'organization' => [IssuerOrganization::class, 'create'],
    ];
}
