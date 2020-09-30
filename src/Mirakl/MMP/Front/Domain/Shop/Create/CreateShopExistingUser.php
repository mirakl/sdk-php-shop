<?php
namespace Mirakl\MMP\Front\Domain\Shop\Create;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getEmail()
 * @method  $this   setEmail(string $email)
 * @method  string  getPassword()
 * @method  $this   setPassword(string $password)
 */
class CreateShopExistingUser extends MiraklObject
{
    /**
     * @param   string  $email
     * @param   string  $password
     */
    public function __construct($email, $password)
    {
        parent::__construct();
        $this->setEmail($email);
        $this->setPassword($password);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        return new static($data['email'], $data['password']);
    }
}