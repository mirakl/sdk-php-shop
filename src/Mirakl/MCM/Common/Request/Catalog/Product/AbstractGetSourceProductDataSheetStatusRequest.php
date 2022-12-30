<?php
namespace Mirakl\MCM\Common\Request\Catalog\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;

/**
 * (CM11) Downloads the source product data sheet status
 *
 * @method string    getStatus()
 * @method $this     setStatus(string $status)  Possible values: LIVE or NOT_LIVE
 * @method array     getProviderUniqueIdentifier()
 * @method $this     setProviderUniqueIdentifier(array $providerUniqueIdentifier)
 * @method array     getUniqueIdentifier()
 * @method $this     setUniqueIdentifier(array $uniqueIdentifier)
 * @method \DateTime getUpdatedSince()
 * @method $this     setUpdatedSince(\DateTime $updatedSince)
 * @method \DateTime getUpdatedTo()
 * @method $this     setUpdatedTo(\DateTime $updatedTo)
 */
abstract class AbstractGetSourceProductDataSheetStatusRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/mcm/products/sources/status/export';

    /**
     * @var array
     */
    public $queryParams = [
        'updated_since',
        'updated_to',
        'status',
        'provider_unique_identifier',
        'unique_identifier',
    ];

    /**
     * @inheritdoc
     */
    public function getQueryParams()
    {
        $params = parent::getQueryParams();

        if (isset($params['unique_identifier'])) {
            $params['unique_identifier'] = \Mirakl\tuples_to_query_param($this->getUniqueIdentifier());
        }

        return $params;
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return MiraklCollection::decorator();
    }
}
