<?php
namespace Mirakl\Core\Domain\Collection;

use Mirakl\Core\Domain\FileWrapper;

/**
 * @method  FileWrapper current()
 * @method  FileWrapper first()
 * @method  FileWrapper get($offset)
 * @method  FileWrapper offsetGet($offset)
 * @method  FileWrapper last()
 */
class FileCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = FileWrapper::class;
}