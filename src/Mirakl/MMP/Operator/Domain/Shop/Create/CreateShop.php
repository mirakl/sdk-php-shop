<?php
namespace Mirakl\MMP\Operator\Domain\Shop\Create;

use Mirakl\MMP\FrontOperator\Domain\Shop\Create\AbstractCreateShop;

/**
 * @method  CreateShopExistingUser  getExistingUser()
 * @method  $this                   setExistingUser(array|CreateShopExistingUser $existingUser)
 * @method  CreateShopNewUser       getNewUser()
 * @method  $this                   setNewUser(array|CreateShopNewUser $newUser)
 */
class CreateShop extends AbstractCreateShop
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'existing_user' => [CreateShopExistingUser::class, 'create'],
        'new_user'      => [CreateShopNewUser::class, 'create'],
    ];
}