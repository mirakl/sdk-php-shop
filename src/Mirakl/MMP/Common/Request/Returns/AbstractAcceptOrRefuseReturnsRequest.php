<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\Returns\Workflow\AcceptOrRefuseReturnCollection;

/**
 * (RT21) Accept or refuse a return request
 *
 * @method AcceptOrRefuseReturnCollection getReturns()
 * @method $this                          setReturns(array|AcceptOrRefuseReturnCollection $returns)
 */
#[ApiOperation('RT21')]
abstract class AbstractAcceptOrRefuseReturnsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/returns/accept';

    /**
     * @var array
     */
    public $bodyParams = ['returns'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'returns' => [AcceptOrRefuseReturnCollection::class, 'create'],
    ];

    /**
     * @param array|AcceptOrRefuseReturnCollection $returns
     */
    public function __construct($returns)
    {
        parent::__construct();

        $this->setReturns($returns);
    }
}
