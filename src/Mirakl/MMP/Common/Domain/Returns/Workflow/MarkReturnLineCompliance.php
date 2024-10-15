<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns\Workflow;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getOrderLineId()
 * @method $this  setOrderLineId(string $orderLineId)
 * @method bool   getCompliant()
 * @method $this  setCompliant(bool $compliant)
 * @method string getNonComplianceReasonCode()
 * @method $this  setNonComplianceReasonCode(string $nonComplianceReasonCode)
 * @method string getNonComplianceAdditionalInfo()
 * @method $this  setNonComplianceAdditionalInfo(string $nonComplianceAdditionalInfo)
 */
class MarkReturnLineCompliance extends MiraklObject
{
}
