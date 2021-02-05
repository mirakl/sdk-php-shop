<?php
namespace Mirakl\MMP\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Error;

/**
 * @method  Error   current()
 * @method  Error   first()
 * @method  Error   get($offset)
 * @method  Error   offsetGet($offset)
 * @method  Error   last()
 */
class ErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Error::class;

    /**
     * @param   string  $value
     * @return  Error
     */
    public function getByField($value)
    {
        foreach ($this as $item) {
            if ($item->getField() == $value) {
                return $item;
            }
        }

        return null;
    }
}