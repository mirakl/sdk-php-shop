<?php
namespace Mirakl\MCI\Common\Request\ProductFeed;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MCI\Common\Domain\Collection\ProductFeed\ProductFeedCollection;

/**
 * (PF11) Get operator's product feeds
 *
 * @method string getCode()
 * @method $this  setCode(string $code)
 */
abstract class AbstractGetProductFeedsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/product_feeds';

    /**
     * @var array
     */
    public $queryParams = ['code'];

    /**
     * @param string|null $code
     */
    public function __construct($code = null)
    {
        parent::__construct();

        if ($code) {
            $this->setCode($code);
        }
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductFeedCollection::decorator('product_feeds');
    }
}