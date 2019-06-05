<?php
namespace Mirakl\MCI\Common\Request\ValueList;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MCI\Common\Domain\ValueLists;

/**
 * (PM31) Get value list items
 *
 * @method  string  getValueListCode()
 * @method  $this   setValueListCode(string $valueListCode)
 */
abstract class AbstractGetValueListsItemsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/values_lists';

    /**
     * @var array
     */
    public $queryParams = ['value_list_code' => 'code'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ValueLists::decorator();
    }
}