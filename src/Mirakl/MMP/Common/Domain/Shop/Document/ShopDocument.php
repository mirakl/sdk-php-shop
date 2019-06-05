<?php
namespace Mirakl\MMP\Common\Domain\Shop\Document;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  \DateTime   getDateDeleted()
 * @method  $this       setDateDeleted(\DateTime $dateDeleted)
 * @method  \DateTime   getDateUploaded()
 * @method  $this       setDateUploaded(\DateTime $dateUploaded)
 * @method  string      getFileName()
 * @method  $this       setFileName(string $fileName)
 * @method  string      getId()
 * @method  $this       setId(string $id)
 * @method  bool        getIncludeDeleted()
 * @method  $this       setIncludeDeleted(bool $includeDeleted)
 * @method  bool        isIncludeDeleted()
 * @method  string      getShopId()
 * @method  $this       setShopId(string $shopId)
 * @method  string      getTypeCode()
 * @method  $this       setTypeCode(string $typeCode)
 * @method  \DateTime   getUpdatedSince()
 * @method  $this       setUpdatedSince(\DateTime $updatedSince)
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