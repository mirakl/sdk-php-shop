<?php
namespace Mirakl\MMP\FrontOperator\Domain;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\FrontOperator\Domain\Collection\Category\CategoryMediaCollection;

/**
 * @method  string                  getCode()
 * @method  $this                   setCode(string $code)
 * @method  string                  getDescription()
 * @method  $this                   setDescription(string $description)
 * @method  string                  getLabel()
 * @method  $this                   setLabel(string $label)
 * @method  string                  getLogisticClass()
 * @method  $this                   setLogisticClass(string $logisticClass)
 * @method  string                  getParentCode()
 * @method  $this                   setParentCode(string $parentCode)
 * @method  string                  getType()
 * @method  $this                   setType(string $type)
 * @method  CategoryMediaCollection getMedia()
 * @method  $this                   setMedia(array|CategoryMediaCollection $media)
 */
class Category extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'media' => [CategoryMediaCollection::class, 'create'],
    ];

    /**
     * @var array
     */
    protected static $mapping = [
        'category_code'        => 'code',
        'category_description' => 'description',
        'category_label'       => 'label',
        'category_type'        => 'type',
        'category_medias'      => 'media',
    ];
}