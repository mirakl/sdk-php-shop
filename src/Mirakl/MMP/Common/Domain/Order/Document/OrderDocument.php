<?php
namespace Mirakl\MMP\Common\Domain\Order\Document;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  \DateTime   getDateUploaded()
 * @method  $this       setDateUploaded(\DateTime $dateUploaded)
 * @method  string      getFileName()
 * @method  $this       setFileName(string $fileName)
 * @method  string      getId()
 * @method  $this       setId(string $id)
 * @method  string      getOrderId()
 * @method  $this       setOrderId(string $orderId)
 * @method  string      getTypeCode()
 * @method  $this       setTypeCode(string $typeCode)
 */
class OrderDocument extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'type' => 'type_code',
    ];
}