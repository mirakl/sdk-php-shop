<?php
namespace Mirakl\MMP\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  array   getAcceptedValues()
 * @method  $this   setAcceptedValues(array $acceptedValues)    This list populated with the accepted values of
 *                                                              additional field when the type is LIST
 *
 * @method  string  getCode()                                   Code of the additional field
 * @method  $this   setCode(string $code)
 *
 * @method  string  getLabel()                                  Label of the additional field
 * @method  $this   setLabel(string $label)
 *
 * @method  string  getEntity()                                 The object on which the additional field applies
 * @method  $this   setEntity(string $entity)                   One of AdditionalFieldLinkedEntity
 *
 * @method  string  getRegex()                                  The regular expression that is used to validate
 *                                                              the field value
 * @method  $this   setRegex(string $regex)
 *
 * @method  bool    getRequired()
 * @method  $this   setRequired(bool $required)
 * @method  bool    isRequired()                                Whether or not the additionnal field is required
 *
 * @method  string  getShopPermission()
 * @method  $this   setShopPermission(bool $shopPermission)
 *
 * @method  string  getType()                                   Type of the additional field
 * @method  $this   setType(string $type)                       One of AdditionalFieldType
 */
class AdditionalField extends MiraklObject
{}