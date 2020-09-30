<?php
namespace Mirakl\MMP\FrontOperator\Request\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\FrontOperator\Domain\Shop\Create\CreatedShops;

/**
 * (S06) Create shops
 */
abstract class AbstractCreateShopsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/shops';

    /**
     * @var array
     */
    public $bodyParams = ['shops'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CreatedShops::decorator();
    }
}