<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Returns\ReturnIdentifierCollection;
use Mirakl\MMP\Common\Domain\Returns\ReturnWorkflowResponse;

/**
 * (RT25) Validate returns as received
 *
 * @method ReturnIdentifierCollection getReturns()
 * @method $this                      setReturns(ReturnIdentifierCollection|array $returns)
 */
abstract class AbstractReceiveReturnsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/returns/receive';

    /**
     * @var array
     */
    public $bodyParams = ['returns'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'returns' => [ReturnIdentifierCollection::class, 'create'],
    ];

    /**
     * @param array|ReturnIdentifierCollection $returns
     */
    public function __construct($returns)
    {
        parent::__construct();

        $this->setReturns($returns);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ReturnWorkflowResponse::decorator();
    }
}
