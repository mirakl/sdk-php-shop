<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order\Update;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Update\UpdatedCancelation;

/**
 * @method  UpdatedCancelation current()
 * @method  UpdatedCancelation first()
 * @method  UpdatedCancelation get($offset)
 * @method  UpdatedCancelation offsetGet($offset)
 * @method  UpdatedCancelation last()
 */
class UpdatedCancelationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdatedCancelation::class;
}