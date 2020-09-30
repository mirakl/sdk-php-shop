<?php
namespace Mirakl\MCM\Front\Request\Catalog\Product;

use Mirakl\Core\Request\AbstractRequest;

/**
 * (CM51) Export products
 *
 * Delta export of the MCM products that are accepted and valid in CSV format.
 * The exported product file uses the product attribute codes as headers, and has an additional column named mirakl-product-id.
 * This column contains the Mirakl unique identifier for each exported product.
 * Its value should be stored in your system, and used in the CM21 API to identify the correct integration or to report integration errors for each product.
 * Define a cron job in your system that periodically calls this API and passes the previous request date as the updated_since query parameter.
 * Your integration logic must rely on header codes and not on column numbers as headers change based/depending on the products exported.
 *
 * @method $this     setAcceptanceStatus(array $acceptanceStatus)
 * @method array     getAcceptanceStatus()
 * @method $this     setCatalog(array $catalog)
 * @method array     getCatalog()
 * @method $this     setProductId(array $productId)
 * @method array     getProductId()
 * @method $this     setProductSku(array $productSku)
 * @method array     getProductSku()
 * @method $this     setSynchronizationStatus(array $synchronizationStatus)
 * @method array     getSynchronizationStatus()
 * @method $this     setUpdatedSince(\DateTime $updatedSince)
 * @method \DateTime getUpdatedSince()
 * @method $this     setUpdatedTo(\DateTime $updatedTo)
 * @method \DateTime getUpdatedTo()
 * @method $this     setValidationStatus(array $validationStatus)
 * @method array     getValidationStatus()
 * @method $this     setVariantGroupCode(array $variantGroupCode)
 * @method array     getVariantGroupCode()
 *
 */
abstract class AbstractProductExportRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/mcm/products/export';

    /**
     * @var array
     */
    public $queryParams = ['updated_since', 'updated_to','acceptance_status', 'validation_status', 'product_sku', 'product_id', 'variant_group_code', 'catalog', 'synchronization_status'];
}