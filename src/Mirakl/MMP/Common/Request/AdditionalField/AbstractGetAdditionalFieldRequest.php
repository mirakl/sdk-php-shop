<?php
namespace Mirakl\MMP\Common\Request\AdditionalField;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldCollection;

/**
 * (AF01) Get the list of any additional fields
 *
 * @method  array   getEntities()                   Array of AdditionalFieldLinkedEntity
 * @method  $this   setEntities(array $entities)
 */
abstract class AbstractGetAdditionalFieldRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/additional_fields';

    /**
     * @var array
     */
    public $queryParams = ['entities'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return AdditionalFieldCollection::decorator('additional_fields');
    }
}