<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\OperatorShop\Domain\Collection\Returns\UpdateReturnCollection;

/**
 * (RT04) Patch update returns
 *
 * @method UpdateReturnCollection getUpdateReturns()
 * @method $this                  setUpdateReturns(UpdateReturnCollection|array $updateReturns)
 */
abstract class AbstractUpdateReturnsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/returns';

    /**
     * @var array
     */
    public $bodyParams = ['update_returns' => 'returns'];

    /**
     * @var bool
     */
    protected $cleanup = false;

    /**
     * @param UpdateReturnCollection|array $updateReturns
     */
    public function __construct($updateReturns)
    {
        parent::__construct();

        $this->setUpdateReturns($updateReturns);
    }
}
