<?php
namespace Mirakl\MMP\Common\Request\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Shop\Document\ShopDocumentCollection;

/**
 * (S30) List shop's documents
 *
 * @method  array   getShopIds()
 * @method  $this   setShopIds(array $shopIds)
 */
abstract class AbstractGetShopDocumentsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shops/documents';

    /**
     * @var array
     */
    public $queryParams = ['shop_ids'];

    /**
     * @param   array   $shopIds
     */
    public function __construct(array $shopIds)
    {
        parent::__construct();
        $this->setShopIds($shopIds);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShopDocumentCollection::decorator('shop_documents');
    }
}
