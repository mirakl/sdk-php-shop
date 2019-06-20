<?php
namespace Mirakl\MMP\Common\Request\Message;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (M01) List messages of an offer (sort by creation date)
 * Note: this resource supports pagination and will return 10 messages
 *
 * @method  string  getCustomerId()
 * @method  $this   setCustomerId(string $customerId)
 * @method  bool    getVisible()
 * @method  $this   setVisible(bool $flag)
 * @method  bool    getReceived()
 * @method  bool    hasReceived()
 * @method  $this   setReceived(bool $flag)
 * @method  string  getUserType()
 * @method  $this   setUserType(string $userType)
 */
abstract class AbstractGetMessagesRequest extends AbstractRequest
{
    use DateRangeTrait;
    use PageableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/messages';

    /**
     * @var array
     */
    public $queryParams = ['offer_id', 'shop_id' ,'customer_id', 'order_id', 'customer_id', 'received', 'user_type'];

    /**
     * @var array
     */
    public $boolOrAllParams = ['visible', 'received'];
}