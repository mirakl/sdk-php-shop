<?php
namespace Mirakl\MMP\Common\Domain\Shop;

class ShopKycStatus
{
    const PENDING_SUBMISSION = 'PENDING_SUBMISSION';
    const PENDING_APPROVAL   = 'PENDING_APPROVAL';
    const REFUSED            = 'REFUSED';
    const APPROVED           = 'APPROVED';
}