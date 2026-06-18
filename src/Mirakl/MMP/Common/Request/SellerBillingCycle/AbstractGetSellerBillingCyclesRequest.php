<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\SellerBillingCycle;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (SBC11) List seller billing cycles
 *
 * @method string[] getCurrency()
 * @method $this    setCurrency(string[] $currency)
 * @method string[] getId()
 * @method $this    setId(string[] $id)
 * @method string[] getPayOutPspCode()
 * @method $this    setPayOutPspCode(string[] $payOutPspCode)
 * @method string[] getPayOutState()
 * @method $this    setPayOutState(string[] $payOutState)
 */
#[ApiOperation('SBC11')]
abstract class AbstractGetSellerBillingCyclesRequest extends AbstractRequest
{
    use DateRangeTrait;
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/seller-billing-cycles';

    /**
     * @var array
     */
    public $queryParams = [
        'currency',
        'id',
        'pay_out_psp_code',
        'pay_out_state',
    ];

    /**
     * @var array
     */
    protected $duplicatedQueryParams = ['currency', 'id', 'pay_out_state'];
}
