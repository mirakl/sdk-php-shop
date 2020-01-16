<?php
namespace Mirakl\MCI\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\AttributeRoleCollection;
use Mirakl\MCI\Common\Domain\Collection\ValueTranslationCollection;

/**
 * @method  string                      getCode()
 * @method  $this                       setCode(string $code)
 * @method  string                      getDefaultValue()   If attribute type is LIST, this is the default value chosen on it
 * @method  $this                       setDefaultValue(string $defaultValue)
 * @method  string                      getDescription()
 * @method  $this                       setDescription(string $description)
 * @method  ValueTranslationCollection  getDescriptionTranslations()
 * @method  string                      getExample()
 * @method  $this                       setExample(string $example)
 * @method  string                      getHierarchyCode()
 * @method  $this                       setHierarchyCode(string $hierarchyCode)
 * @method  string                      getLabel()
 * @method  $this                       setLabel(string $label)
 * @method  ValueTranslationCollection  getLabelTranslations()
 * @method  bool                        getRequired()
 * @method  $this                       setRequired(bool $required)
 * @method  bool                        isRequired()
 * @method  AttributeRoleCollection     getRoles()
 * @method  $this                       setRoles(AttributeRoleCollection $roles)
 * @method  string                      getType()
 * @method  $this                       setType(string $type)
 * @method  string                      getTypeParameter()
 * @method  $this                       setTypeParameter(string $typeParameter)
 * @method  string                      getTransformations()
 * @method  $this                       setTransformations(string $transformations)
 * @method  string                      getUniqueCode()
 * @method  $this                       setUniqueCode(string $uniqueCode)
 * @method  string                      getValidations()
 * @method  $this                       setValidations(string $validations)
 * @method  bool                        getVariant()
 * @method  $this                       setVariant(bool $variant)
 * @method  bool                        isVariant()
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
    ];
}