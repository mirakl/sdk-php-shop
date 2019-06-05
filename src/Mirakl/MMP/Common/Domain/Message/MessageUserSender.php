<?php
namespace Mirakl\MMP\Common\Domain\Message;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getId()
 * @method  $this   setId(string $id)
 * @method  string  getName()
 * @method  $this   setName(string $name)
 * @method  string  getType()               One of UserType
 * @method  $this   setType(string $type)
 */
class MessageUserSender extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'from_id'   => 'id',
        'from_name' => 'name',
        'from_type' => 'type',
    ];
}