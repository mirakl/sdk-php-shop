<?php
namespace Mirakl\MMP\Operator\Request\AdditionalField;

use Mirakl\MMP\Common\Request\AdditionalField\AbstractGetAdditionalFieldRequest;

/**
 * (AF01) Get the list of any additional fields
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\AdditionalField\GetAdditionalFieldRequest;
 * use Mirakl\MMP\Common\Domain\AdditionalField\AdditionalFieldLinkedEntity;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetAdditionalFieldRequest();
 * $request->setEntities([AdditionalFieldLinkedEntity::OFFER, AdditionalFieldLinkedEntity::SHOP]); // Optional
 * $result = $api->getAdditionalFields($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\AdditionalFieldCollection
 * </code>
 */
class GetAdditionalFieldRequest extends AbstractGetAdditionalFieldRequest
{}