<?php
namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Domain\FileWrapper;
use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\MCI\Common\Domain\Product\IntegrationDetails;
use Mirakl\MCI\Common\Domain\Product\ProductImportStatus;

/**
 * (P43) Update the integration status of the product import file and upload the integration
 * and error reports from the operator information system
 *
 * @method  FileWrapper         getErrorsFile()
 * @method  string              getImportId()
 * @method  $this               setImportId(string $importId)
 * @method  IntegrationDetails  getIntegrationDetails()
 * @method  $this               setIntegrationDetails(array|IntegrationDetails $integrationDetails)
 * @method  FileWrapper         getProductsFile()
 * @method  string              getStatus()
 * @method  $this               setStatus(string $status)
 *
 */
abstract class AbstractUpdateProductImportStatusRequest extends AbstractImportRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/products/imports/{import}';

    /**
     * @var bool
     */
    protected $json = false;

    /**
     * @var array
     */
    public $bodyParams = ['products_file', 'errors_file', 'status', 'integration_details'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'integration_details' => [IntegrationDetails::class, 'create'],
    ];

    /**
     * @param   string  $importId
     * @param   string  $status
     */
    public function __construct($importId, $status = ProductImportStatus::COMPLETE)
    {
        parent::__construct($importId);
        $this->setStatus($status);
    }

    /**
     * @param   mixed   $errorsFile
     * @return  $this
     */
    public function setErrorsFile($errorsFile)
    {
        if (!$errorsFile instanceof FileWrapper) {
            $errorsFile = new FileWrapper($errorsFile);
        }

        return $this->setData('errors_file', $errorsFile);
    }

    /**
     * @param   mixed   $productsFile
     * @return  $this
     */
    public function setProductsFile($productsFile)
    {
        if (!$productsFile instanceof FileWrapper) {
            $productsFile = new FileWrapper($productsFile);
        }

        return $this->setData('products_file', $productsFile);
    }
}