<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop;

class ShopKycStatus
{
    public const PENDING_SUBMISSION = 'PENDING_SUBMISSION';
    public const PENDING_APPROVAL   = 'PENDING_APPROVAL';
    public const REFUSED            = 'REFUSED';
    public const APPROVED           = 'APPROVED';
    public const NOT_REQUIRED       = 'NOT_REQUIRED';
}
