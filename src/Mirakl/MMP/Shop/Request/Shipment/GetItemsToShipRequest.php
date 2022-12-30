<?php
namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\MMP\Common\Request\Shipment\AbstractGetItemsToShipRequest;
use Mirakl\MMP\Shop\Domain\Collection\Shipment\ItemToShipCollection;

/**
 * (ST12) List items to ship (this resource supports seek pagination)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new \Mirakl\MMP\Shop\Request\Shipment\GetItemsToShipRequest();
 * $request->setOrderIds(['ORD-123']);
 * $request->setFulfillmentCenterCodes(['DEFAULT']);
 *
 * $result = $api->getItemsToShip($request);
 *
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // Loop on collection with $result->getCollection()
 *
 * // Get next results with token from response:
 * $request = new \Mirakl\MMP\Shop\Request\Shipment\GetItemsToShipRequest();
 * $request->setPageToken($result->getNextPageToken());
 * $result = $api->getItemsToShip($request);
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // See also previous token: @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection::getPreviousPageToken()
 * </code>
 */
class GetItemsToShipRequest extends AbstractGetItemsToShipRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new SeekableCollection(ItemToShipCollection::class, 'data');
    }
}