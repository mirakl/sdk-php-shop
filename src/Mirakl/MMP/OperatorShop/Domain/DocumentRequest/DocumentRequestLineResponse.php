<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\InvoiceEcoContributionCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\TaxCollection;

/**
 * @method string                            getPaymentState()
 * @method $this                             setPaymentState(string $paymentState)
 * @method string                            getEntityType()
 * @method $this                             setEntityType(string $entityType)
 * @method InvoiceEcoContributionCollection  getEcoContributions()
 * @method $this                             setEcoContributions(InvoiceEcoContributionCollection|array $ecoContributions)
 * @method string                            getEntityId()
 * @method $this                             setEntityId(string $entityId)
 * @method Shop                              getShop()
 * @method $this                             setShop(Shop|array $shop)
 * @method OrderRelatedToDocumentRequest     getOrder()
 * @method $this                             setOrder(OrderRelatedToDocumentRequest|array $order)
 * @method OrderLineRelatedToDocumentRequest getOrderLine()
 * @method $this                             setOrderLine(OrderLineRelatedToDocumentRequest|array $orderLine)
 * @method float                             getOriginUnitPriceExcludingTaxes()
 * @method $this                             setOriginUnitPriceExcludingTaxes(float $originUnitPriceExcludingTaxes)
 * @method float                             getOriginUnitPriceIncludingTaxes()
 * @method $this                             setOriginUnitPriceIncludingTaxes(float $originUnitPriceIncludingTaxes)
 * @method ProductRelatedToDocumentRequest   getProduct()
 * @method $this                             setProduct(ProductRelatedToDocumentRequest|array $product)
 * @method int                               getQuantity()
 * @method $this                             setQuantity(int $quantity)
 * @method float                             getUnitPriceExcludingTaxes()
 * @method $this                             setUnitPriceExcludingTaxes(float $unitPriceExcludingTaxes)
 * @method float                             getPriceExcludingTaxes()
 * @method $this                             setPriceExcludingTaxes(float $priceExcludingTaxes)
 * @method float                             getShippingPriceExcludingTaxes()
 * @method $this                             setShippingPriceExcludingTaxes(float $shippingPriceExcludingTaxes)
 * @method float                             getTotalPriceIncludingTaxes()
 * @method $this                             setTotalPriceIncludingTaxes(float $totalPriceIncludingTaxes)
 * @method TaxCollection                     getTaxes()
 * @method $this                             setTaxes(TaxCollection|array $taxes)
 * @method TaxCollection                     getShippingTaxes()
 * @method $this                             setShippingTaxes(TaxCollection|array $shippingTaxes)
 */
class DocumentRequestLineResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'eco_contributions' => [InvoiceEcoContributionCollection::class, 'create'],
        'shop'              => [Shop::class, 'create'],
        'order'             => [OrderRelatedToDocumentRequest::class, 'create'],
        'order_line'        => [OrderLineRelatedToDocumentRequest::class, 'create'],
        'product'           => [ProductRelatedToDocumentRequest::class, 'create'],
        'taxes'             => [TaxCollection::class, 'create'],
        'shipping_taxes'    => [TaxCollection::class, 'create'],
    ];
}