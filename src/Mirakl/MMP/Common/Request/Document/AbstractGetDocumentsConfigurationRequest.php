<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Document;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Document\DocumentsConfigurationCollection;

/**
 * (DO01) Get the list of all document types
 *
 * @method string[] getEntities()
 * @method $this    setEntities(string[] $entities)
 */
abstract class AbstractGetDocumentsConfigurationRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/documents';

    /**
     * @var array
     */
    public $queryParams = ['entities'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return DocumentsConfigurationCollection::decorator('documents');
    }
}
