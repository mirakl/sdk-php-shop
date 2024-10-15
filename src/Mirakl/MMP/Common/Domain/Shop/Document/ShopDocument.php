<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Document;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime getDateDeleted()
 * @method $this     setDateDeleted(\DateTime $dateDeleted)
 * @method \DateTime getDateUploaded()
 * @method $this     setDateUploaded(\DateTime $dateUploaded)
 * @method string    getFileName()
 * @method $this     setFileName(string $fileName)
 * @method int       getId()
 * @method $this     setId(int $id)
 * @method bool      getIncludeDeleted()
 * @method $this     setIncludeDeleted(bool $includeDeleted)
 * @method bool      isIncludeDeleted()
 * @method int       getShopId()
 * @method $this     setShopId(int $shopId)
 * @method string    getTypeCode()
 * @method $this     setTypeCode(string $typeCode)
 * @method \DateTime getUpdatedSince()
 * @method $this     setUpdatedSince(\DateTime $updatedSince)
 */
class ShopDocument extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'type' => 'type_code',
    ];
}
