<?php
namespace Mirakl\MCI\Common\Request\ValueList;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MCI\Common\Domain\ValueList;

/**
 * (PM31) Get value list items
 *
 * @method  string  getValueListCode()
 * @method  $this   setValueListCode(string $valueListCode)
 */
abstract class AbstractGetValueListItemsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/attributes/values_list/{values_list}';

    /**
     * @var array
     */
    protected $uriVars = [
        '{values_list}' => 'value_list_code',
    ];

    /**
     * @param   string  $valueListCode
     */
    public function __construct($valueListCode)
    {
        parent::__construct();
        $this->setValueListCode($valueListCode);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ValueList::decorator();
    }
}