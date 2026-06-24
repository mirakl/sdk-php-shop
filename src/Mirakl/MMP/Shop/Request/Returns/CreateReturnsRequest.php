<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Collection\Returns\ReturnCreationCollection;
use Mirakl\MMP\Shop\Domain\Returns\ReturnCreationResponse;

/**
 * (RT01) Create returns
 *
 * @method ReturnCreationCollection getReturns()
 * @method $this                    setReturns(array|ReturnCreationCollection $returns)
 */
#[ApiOperation('RT01')]
class CreateReturnsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/returns';

    /**
     * @var array
     */
    public $bodyParams = ['returns'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'returns' => [ReturnCreationCollection::class, 'create'],
    ];

    /**
     * @param array|ReturnCreationCollection $returns
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
        return ReturnCreationResponse::decorator();
    }
}
