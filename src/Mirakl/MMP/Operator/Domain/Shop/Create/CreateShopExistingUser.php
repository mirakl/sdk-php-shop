<?php
namespace Mirakl\MMP\Operator\Domain\Shop\Create;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getEmail()
 * @method  $this   setEmail(string $email)
 */
class CreateShopExistingUser extends MiraklObject
{
    /**
     * @param   string  $email
     */
    public function __construct($email)
    {
        parent::__construct();
        $this->setEmail($email);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        return new static($data['email']);
    }
}