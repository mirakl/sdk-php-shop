<?php
namespace Mirakl\MMP\Shop\Request\Channel;

use Mirakl\MMP\Common\Request\Channel\AbstractGetChannelsRequest;

/**
 * (CH11) List all enabled channels
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Channel\GetChannelsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new GetChannelsRequest();
 * $request->setLocale('fr_FR');
 *
 * $result = $api->getChannels($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Channel\ChannelCollection
 *
 * </code>
 */
class GetChannelsRequest extends AbstractGetChannelsRequest
{}