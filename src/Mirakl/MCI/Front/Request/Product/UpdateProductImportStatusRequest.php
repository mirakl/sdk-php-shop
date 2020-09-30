<?php
namespace Mirakl\MCI\Front\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractUpdateProductImportStatusRequest;

/**
 * (P43) Update the integration status of the product import file and upload the integration
 * and error reports from the operator information system
 *
 *  Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Product\UpdateProductImportStatusRequest;
 * use Mirakl\Core\Domain\FileWrapper;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new UpdateProductImportStatusRequest('IMPORT_ID');
 * $errorsFile = new \SplFileObject('/path/to/errors_file.csv');
 * $request->setErrorsFile(new FileWrapper($errorsFile)); // Optional
 * $productsFile = new \SplFileObject('/path/to/products_file.csv');
 * $request->setProductsFile(new FileWrapper($productsFile)); // Optional
 * $api->updateProductImportStatus($request);
 * </code>
 */
class UpdateProductImportStatusRequest extends AbstractUpdateProductImportStatusRequest
{}