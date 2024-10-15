<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns\Workflow;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getId()
 * @method $this  setId(string $id)
 * @method bool   getAccepted()
 * @method $this  setAccepted(bool $accepted)
 * @method string getRejectionReasonCode()
 * @method $this  setRejectionReasonCode(string $rejectionReasonCode)
 */
class AcceptOrRefuseReturn extends MiraklObject
{
}
