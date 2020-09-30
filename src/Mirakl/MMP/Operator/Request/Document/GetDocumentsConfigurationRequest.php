<?php
namespace Mirakl\MMP\Operator\Request\Document;

use Mirakl\MMP\Common\Request\Document\AbstractGetDocumentsConfigurationRequest;

/**
 * (DO01) Get the list of all document types
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Document\GetDocumentsConfigurationRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetDocumentsConfigurationRequest();
 * $request->setEntities(['ORDER', 'SHOP']);
 *
 * $result = $api->getDocumentsConfiguration($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Document\DocumentsConfigurationCollection
 * </code>
 */
class GetDocumentsConfigurationRequest extends AbstractGetDocumentsConfigurationRequest
{}