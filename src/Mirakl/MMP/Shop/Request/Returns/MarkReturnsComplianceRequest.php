<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\Returns\Workflow\MarkReturnComplianceCollection;
use Mirakl\MMP\Common\Domain\Returns\ReturnWorkflowResponse;

/**
 * (RT26) Mark a return as compliant or non compliant
 *
 * @method MarkReturnComplianceCollection getReturns()
 * @method $this                          setReturns(array|MarkReturnComplianceCollection $returns)
 */
#[ApiOperation('RT26')]
class MarkReturnsComplianceRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/returns/compliance';

    /**
     * @var array
     */
    public $bodyParams = ['returns'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'returns' => [MarkReturnComplianceCollection::class, 'create'],
    ];

    /**
     * @param array|MarkReturnComplianceCollection $returns
     */
    public function __construct($returns)
    {
        parent::__construct();

        $this->setReturns($returns);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ReturnWorkflowResponse::decorator();
    }
}
