<?php

declare(strict_types=1);

namespace Mirakl\Core\Domain;

/**
 * List of all possible statuses for a process tracking
 */
class ProcessTrackingStatus
{
    public const WAITING   = 'WAITING';
    public const RUNNING   = 'RUNNING';
    public const COMPLETE  = 'COMPLETE';
    public const FAILED    = 'FAILED';
    public const CANCELLED = 'CANCELLED';
    public const QUEUED    = 'QUEUED';
}
