<?php
namespace Mirakl\MMP\Common\Domain\Collection\Document;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Document\DocumentsConfiguration;

/**
 * @method  DocumentsConfiguration  current()
 * @method  DocumentsConfiguration  first()
 * @method  DocumentsConfiguration  get($offset)
 * @method  DocumentsConfiguration  offsetGet($offset)
 * @method  DocumentsConfiguration  last()
 */
class DocumentsConfigurationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DocumentsConfiguration::class;
}