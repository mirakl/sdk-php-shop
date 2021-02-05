<?php
namespace Mirakl\Core\Request;

/**
 * @method  string  getImportId()
 * @method  $this   setImportId(string $importId)
 */
abstract class AbstractImportRequest extends AbstractRequest
{
    /**
     * @var array
     */
    protected $uriVars = [
        '{import}' => 'import_id',
    ];

    /**
     * @param   string  $importId
     */
    public function __construct($importId)
    {
        parent::__construct();
        $this->setImportId($importId);
    }
}