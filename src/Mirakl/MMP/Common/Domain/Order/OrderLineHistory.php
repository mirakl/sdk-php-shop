<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  \DateTime   getCreatedDate()
 * @method  $this       setCreatedDate(\DateTime $createdDate)
 * @method  \DateTime   getDebitedDate()
 * @method  $this       setDebitedDate(\DateTime $debitedDate)
 * @method  \DateTime   getLastUpdatedDate()
 * @method  $this       setLastUpdatedDate(\DateTime $lastUpdatedDate)
 * @method  \DateTime   getReceivedDate()
 * @method  $this       setReceivedDate(\DateTime $receivedDate)
 * @method  \DateTime   getShippedDate()
 * @method  $this       setShippedDate(\DateTime $shippedDate)
 */
class OrderLineHistory extends MiraklObject
{}