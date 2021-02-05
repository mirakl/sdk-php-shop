<?php
namespace Mirakl\MMP\Common\Request\Channel;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Channel\ChannelCollection;

/**
 * (CH11) List all enabled channels
 */
abstract class AbstractGetChannelsRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/channels';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ChannelCollection::decorator('channels');
    }
}