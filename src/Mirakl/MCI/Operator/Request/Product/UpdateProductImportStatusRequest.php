<?php
namespace Mirakl\MCI\Operator\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractUpdateProductImportStatusRequest;

/**
 * (P43) Update the integration status of the product import file and upload the integration
 * and error reports from the operator information system
 *
 *  Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\Product\UpdateProductImportStatusRequest;
 * use Mirakl\Core\Domain\FileWrapper;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
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