<?php
namespace Mirakl\MMP\Front\Request\Message;

use Mirakl\MMP\Common\Request\Message\AbstractGetMessagesRequest;

/**
 * (OF41) (M01 is used instead) List messages of an offer (sort by creation date)
 * Note: this resource supports pagination and will return 10 messages
 *
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 */
abstract class AbstractFrontGetMessagesRequest extends AbstractGetMessagesRequest
{}