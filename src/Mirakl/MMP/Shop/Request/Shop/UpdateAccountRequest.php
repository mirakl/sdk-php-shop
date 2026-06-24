<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Shop\Update\UpdateShopAccount;
use Mirakl\MMP\Shop\Domain\Shop\UpdatedShopAndError;

/**
 * (A02) Update shop information
 *
 * @method UpdateShopAccount getUpdateShopAccount()
 * @method $this             setUpdateShopAccount(array|UpdateShopAccount $updateShopAccount)
 */
#[ApiOperation('A02')]
class UpdateAccountRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/account';

    /**
     * @var array
     */
    public $bodyParams = [
        'update_shop_account',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'update_shop_account' => [UpdateShopAccount::class, 'create'],
    ];

    /**
     * @var bool
     */
    protected $cleanup = false;

    /**
     * @param array|UpdateShopAccount $updateShopAccount
     */
    public function __construct($updateShopAccount)
    {
        parent::__construct();

        $this->setUpdateShopAccount($updateShopAccount);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getUpdateShopAccount()->toArray();
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return UpdatedShopAndError::decorator();
    }
}
