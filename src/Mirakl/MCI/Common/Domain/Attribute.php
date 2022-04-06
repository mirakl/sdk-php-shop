<?php
namespace Mirakl\MCI\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\AttributeParameterCollection;
use Mirakl\MCI\Common\Domain\Collection\AttributeProductFeedCollection;
use Mirakl\MCI\Common\Domain\Collection\AttributeRoleCollection;
use Mirakl\MCI\Common\Domain\Collection\ValueTranslationCollection;

/**
 * @method  string                          getCode()
 * @method  $this                           setCode(string $code)
 * @method  string                          getDefaultValue() @deprecated Please use getTypeParameters() instead.
 * @method  $this                           setDefaultValue(string $defaultValue) @deprecated Please use setTypeParameters() instead.
 * @method  string                          getDescription()
 * @method  $this                           setDescription(string $description)
 * @method  ValueTranslationCollection      getDescriptionTranslations()
 * @method  $this                           setDescriptionTranslations(ValueTranslationCollection $descriptionTranslations)
 * @method  string                          getExample()
 * @method  $this                           setExample(string $example)
 * @method  string                          getHierarchyCode()
 * @method  $this                           setHierarchyCode(string $hierarchyCode)
 * @method  string                          getLabel()
 * @method  $this                           setLabel(string $label)
 * @method  ValueTranslationCollection      getLabelTranslations()
 * @method  $this                           setLabelTranslations(ValueTranslationCollection $labelTranslations)
 * @method  AttributeProductFeedCollection  getProductFeeds()
 * @method  $this                           setProductFeeds(AttributeProductFeedCollection $productFeeds)
 * @method  bool                            getRequired()
 * @method  $this                           setRequired(bool $required)
 * @method  string                          getRequirementLevel()
 * @method  $this                           setRequirementLevel(bool $requirementLevel)
 * @method  bool                            isRequired()
 * @method  AttributeRoleCollection         getRoles()
 * @method  $this                           setRoles(AttributeRoleCollection $roles)
 * @method  string                          getType()
 * @method  $this                           setType(string $type)
 * @method  string                          getTypeParameter() @deprecated Please use getTypeParameters() instead.
 * @method  $this                           setTypeParameter(string $typeParameter) @deprecated Please use setTypeParameters() instead.
 * @method  AttributeParameterCollection    getTypeParameters()
 * @method  $this                           setTypeParameters(AttributeParameterCollection $typeParameters)
 * @method  string                          getTransformations()
 * @method  $this                           setTransformations(string $transformations)
 * @method  string                          getUniqueCode()
 * @method  $this                           setUniqueCode(string $uniqueCode)
 * @method  string                          getValidations()
 * @method  $this                           setValidations(string $validations)
 * @method  bool                            getVariant()
 * @method  $this                           setVariant(bool $variant)
 * @method  bool                            isVariant()
 */
class Attribute extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'description_translations' => [ValueTranslationCollection::class, 'create'],
        'label_translations'       => [ValueTranslationCollection::class, 'create'],
        'roles'                    => [AttributeRoleCollection::class, 'create'],
        'type_parameters'          => [AttributeParameterCollection::class, 'create'],
        'product_feeds'            => [AttributeProductFeedCollection::class, 'create'],
    ];
}