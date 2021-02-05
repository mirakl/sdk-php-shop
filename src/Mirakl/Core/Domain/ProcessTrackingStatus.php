<?php
namespace Mirakl\Core\Domain;

/**
 * List of all possible statuses for a process tracking
 *
 * @package Mirakl\Core\Domain
 */
class ProcessTrackingStatus
{
    const WAITING   = 'WAITING';
    const RUNNING   = 'RUNNING';
    const COMPLETE  = 'COMPLETE';
    const FAILED    = 'FAILED';
    const CANCELLED = 'CANCELLED';
    const QUEUED    = 'QUEUED';
}