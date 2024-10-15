<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool   getCompliant()
 * @method $this  setCompliant(bool $compliant)
 * @method string getNonComplianceReasonCode()
 * @method $this  setNonComplianceReasonCode(string $nonComplianceReasonCode)
 * @method string getNonComplianceAdditionalInfo()
 * @method $this  setNonComplianceAdditionalInfo(string $nonComplianceAdditionalInfo)
 */
class ReturnLineCompliance extends MiraklObject
{
}
