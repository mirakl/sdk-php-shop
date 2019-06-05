<?php
namespace Mirakl\MMP\Common\Request\Version;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Version;

/**
 * @method  bool    getFull()
 * @method  $this   setFull(bool $full)
 */
class GetVersionRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/version';

    /**
     * @var array
     */
    public $queryParams = ['full'];

    /**
     * @param   bool    $full
     */
    public function __construct($full = true)
    {
        parent::__construct();
        $this->setFull((bool) $full);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return Version::decorator();
    }
}