<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\OperatorShop\Domain\Collection\Returns\UpdateReturnCollection;
use Mirakl\MMP\OperatorShop\Request\Returns\AbstractUpdateReturnsRequest;
use Mirakl\MMP\Shop\Domain\Returns\UpdateReturnsResponse;

/**
 * (RT04) Patch update returns
 *
 * @method UpdateReturnCollection getUpdateReturns()
 * @method $this                  setUpdateReturns(array|UpdateReturnCollection $updateReturns)
 */
#[ApiOperation('RT04')]
class UpdateReturnsRequest extends AbstractUpdateReturnsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return UpdateReturnsResponse::decorator();
    }
}
