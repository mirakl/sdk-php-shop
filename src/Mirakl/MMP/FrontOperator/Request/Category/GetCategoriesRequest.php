<?php
namespace Mirakl\MMP\FrontOperator\Request\Category;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Category\CategoryCollection;

/**
 * (CA11) Get all Marketplace categories from your platform
 *
 *  Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Category\GetCategoriesRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new GetCategoriesRequest();
 *
 * $categories = $this->api->getCategories($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Collection\Category\CategoryCollection;
 *
 * </code>
 */
class GetCategoriesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/categories';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CategoryCollection::decorator('categories');
    }
}