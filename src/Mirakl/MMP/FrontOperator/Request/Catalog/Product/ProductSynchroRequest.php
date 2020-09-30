<?php
namespace Mirakl\MMP\FrontOperator\Request\Catalog\Product;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\MMP\FrontOperator\Domain\Product\Synchro\ProductSynchroTracking;

/**
 * (P21) Update products from Operator Information System
 * Synchronized products : import csv file to add/update or delete products.
 * File should be uploaded.
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Catalog\Product\ProductSynchroRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $csv = <<<CSV
 * product-sku;product-title;category-code;active;product-references;shop-skus;brand;update-delete
 * 9998000000177264;BEATS Beats Pro New by Dr.Dre Blanc - Casque haute définition pour DJ ;MGK-E59;true;EAN|0848447000555;;BEATS;update
 * 9998000000358758;Animal planet Dauphins - parure de lit GLO006 ;MGF-F20;true;EAN|4016161327005;;Animal planet;update
 * CSV;
 *
 * $request = new ProductSynchroRequest($csv);
 *
 * $result = $api->synchronizeProducts($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Product\Synchro\ProductSynchroTracking;
 *
 * </code>
 */
class ProductSynchroRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/synchros';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductSynchroTracking::decorator();
    }
}