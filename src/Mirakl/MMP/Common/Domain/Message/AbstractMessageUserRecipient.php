<?php
namespace Mirakl\MMP\Common\Domain\Message;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getId()
 * @method  $this   setId(string $id)
 * @method  string  getName()
 * @method  $this   setName(string $name)
 */
abstract class AbstractMessageUserRecipient extends MiraklObject
{}