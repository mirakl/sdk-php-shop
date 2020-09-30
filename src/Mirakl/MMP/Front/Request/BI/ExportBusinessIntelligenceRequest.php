<?php
namespace Mirakl\MMP\Front\Request\BI;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\ZipTrait as ZipResponseDecorator;
use Mirakl\MMP\Front\Domain\BI\DataType;
use Mirakl\MMP\Front\Domain\BI\ExportFileType;

/**
 * (BI01) Retrieve the BI export file generated
 *
 * @method  string  getDataType()
 * @method  $this   setDataType(string $dataType)   One of \Mirakl\MMP\Front\Domain\BI\DataType
 * @method  string  getFileType()
 * @method  $this   setFileType(string $fileType)   One of \Mirakl\MMP\Front\Domain\BI\ExportFileType
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\BI\ExportBusinessIntelligenceRequest;
 * use Mirakl\MMP\Front\Domain\BI\ExportFileType;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new ExportBusinessIntelligenceRequest();
 * $request->setFileType(ExportFileType::XML); // Optional, default is CSV
 * $result = $api->exportDataForBI($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class ExportBusinessIntelligenceRequest extends AbstractRequest
{
    use ZipResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/bi';

    /**
     * @var array
     */
    public $queryParams = ['data_type', 'file_type'];

    /**
     * @var bool
     */
    protected $json = false;

    /**
     * @param   string  $dataType
     * @param   string  $fileType
     */
    public function __construct($dataType = DataType::ORDER_LINE, $fileType = ExportFileType::CSV)
    {
        parent::__construct();
        $this->setDataType($dataType);
        $this->setFileType($fileType);
    }
}