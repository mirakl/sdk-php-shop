<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\SellerBillingCycle;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\SellerBillingCycle\SellerBillingCycleCollection;
use Mirakl\MMP\Common\Request\SellerBillingCycle\AbstractGetSellerBillingCyclesRequest;

/**
 * (SBC11) List seller billing cycles
 */
#[ApiOperation('SBC11')]
class GetSellerBillingCyclesRequest extends AbstractGetSellerBillingCyclesRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return new SeekableCollection(SellerBillingCycleCollection::class, 'data');
    }
}
