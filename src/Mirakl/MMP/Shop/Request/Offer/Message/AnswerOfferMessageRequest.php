<?php
namespace Mirakl\MMP\Shop\Request\Offer\Message;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Message\MessageCreated;
use Mirakl\MMP\Shop\Domain\Offer\Message\OfferMessageAnswer;

/**
 * (OF43) Answer to a message on an offer
 *
 * @method  OfferMessageAnswer  getAnswer()
 * @method  $this               setAnswer(array|OfferMessageAnswer $answer)
 * @method  string              getMessageId()
 * @method  $this               setMessageId(string $id)
 * @method  string              getOfferId()
 * @method  $this               setOfferId(string $id)
 * @method  $this               setShopId(string $shopId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\Message\AnswerOfferMessageRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new AnswerOfferMessageRequest('IMPORT_ID', 'MESSAGE_ID', [
 *     'body' => "It is purple red. It's great!\n\n Regards.",
 *     'visible' => true,
 * ]);
 * $result = $api->answerOfferMessage($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Message\MessageCreated
 * </code>
 */
class AnswerOfferMessageRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/offers/{offer}/messages/{message}';

    /**
     * @var array
     */
    public $bodyParams = ['answer'];

    /**
     * @var array
     */
    protected $uriVars = [
        '{offer}'   => 'offer_id',
        '{message}' => 'message_id',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'answer' => [OfferMessageAnswer::class, 'create'],
    ];

    /**
     * @param   string                      $offerId
     * @param   string                      $messageId
     * @param   array|OfferMessageAnswer    $answer
     */
    public function __construct($offerId, $messageId, $answer)
    {
        parent::__construct();
        $this->setOfferId($offerId);
        $this->setMessageId($messageId);
        $this->setAnswer($answer);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return MessageCreated::decorator();
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getAnswer()->unwrap();
    }
}