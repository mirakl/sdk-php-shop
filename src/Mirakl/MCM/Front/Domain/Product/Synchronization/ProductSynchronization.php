<?php
namespace Mirakl\MCM\Front\Domain\Product\Synchronization;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCM\Front\Domain\Collection\Product\ProductIntegrationErrorCollection;
use Mirakl\MCM\Front\Domain\Collection\Product\ProductSynchronizationErrorCollection;
use Mirakl\MCM\Front\Domain\Product\Export\ProductAcceptanceStatus;

/**
 * @method  ProductAcceptance                       getAcceptance()
 * @method  $this                                   setAcceptance(ProductAcceptance $acceptance)
 * @method  ProductIntegrationErrorCollection       getIntegrationErrors()
 * @method  $this                                   setIntegrationErrors(ProductIntegrationErrorCollection $integrationErrorCollection)
 * @method  string                                  getMiraklProductId()
 * @method  $this                                   setMiraklProductId(string $miraklProductId)
 * @method  string                                  getProductSku()
 * @method  $this                                   setProductSku(string $productSku)
 */
class ProductSynchronization extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'data' => 'data_product',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'acceptance'             => [ProductAcceptance::class, 'create'],
        'integration_errors'     => [ProductIntegrationErrorCollection::class, 'create'],
        'synchronization_errors' => [ProductSynchronizationErrorCollection::class, 'create']
    ];

    /**
     * Confirm product
     *
     * @param   string  $miraklProductId
     * @param   string  $sku
     */
    public function confirmProduct($miraklProductId, $sku)
    {
        $this->unsetData();
        $this->setMiraklProductId($miraklProductId);
        $this->setProductSku($sku);
    }

    /**
     * Report integration errors for a $miraklProductId product
     *
     * @param   string                              $miraklProductId
     * @param   ProductIntegrationErrorCollection   $integrationErrorCollection
     */
    public function reportIntegrationErrorProduct($miraklProductId, ProductIntegrationErrorCollection $integrationErrorCollection)
    {
        $this->unsetData();
        $this->setMiraklProductId($miraklProductId);
        $this->setIntegrationErrors($integrationErrorCollection);
    }

    /**
     * Create a new product
     *
     * @param   string  $sku
     * @param   array   $dataProduct
     */
    public function createProduct($sku, array $dataProduct)
    {
        $this->unsetData();
        $this->setProductSku($sku);
        $this->setDataProduct($dataProduct);
    }

    /**
     * Accept a product
     */
    public function acceptProduct()
    {
        $this->setAcceptance(new ProductAcceptance(['status' => ProductAcceptanceStatus::STATUS_ACCEPTED]));
    }

    /**
     * Reject a product with an optional reason code and messsage
     *
     * @param   string|null $reasonCode
     * @param   string|null $message
     */
    public function rejectProduct($reasonCode = null, $message = null)
    {
        $rejectedProduct = new ProductAcceptance(['status' => ProductAcceptanceStatus::STATUS_REJECTED]);
        if (!empty($reasonCode)) {
            $rejectedProduct->setReasonCode($reasonCode);
        }
        if (!empty($message)) {
            $rejectedProduct->setMessage($message);
        }
        $this->setAcceptance($rejectedProduct);
    }

    /**
     * Update a product
     *
     * @param   string  $miraklProductId
     * @param   string  $sku
     * @param   array   $dataProduct
     */
    public function updateProduct($miraklProductId, $sku, array $dataProduct)
    {
        $this->unsetData();
        $this->setMiraklProductId($miraklProductId);
        $this->setProductSku($sku);
        $this->setDataProduct($dataProduct);
    }

    /**
     * @param   array   $dataProduct
     */
    public function setDataProduct($dataProduct)
    {
        $this->setData('data', $dataProduct);
    }

    /**
     * @return array
     */
    public function getDataProduct()
    {
        return $this->getData('data');
    }
}