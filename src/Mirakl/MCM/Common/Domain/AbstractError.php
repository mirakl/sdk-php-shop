<?php
namespace Mirakl\MCM\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getCode()
 * @method $this  setCode(string $code)
 * @method string getMessage()
 * @method $this  setMessage(string $message)
 */
abstract class AbstractError extends MiraklObject
{}