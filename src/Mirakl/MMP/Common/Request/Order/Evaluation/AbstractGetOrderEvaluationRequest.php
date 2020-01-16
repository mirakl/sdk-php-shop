<?php
namespace Mirakl\MMP\Common\Request\Order\Evaluation;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\MMP\Common\Domain\Evaluation;
use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR51) Get the evaluation of an order
 */
abstract class AbstractGetOrderEvaluationRequest extends AbstractOrderRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/evaluation';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return Evaluation::decorator();
    }
}