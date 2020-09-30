<?php
namespace Mirakl\MMP\Front\Request\Offer\Message;

use Mirakl\MMP\Common\Domain\Message\MessageCreated;
use Mirakl\MMP\Front\Domain\Offer\Message\CreateOfferMessage;
use Mirakl\MMP\Common\Request\Offer\AbstractOfferRequest;

/**
 * (OF42) Create a message on an offer
 * The customer will be created if does not exist.
 * Otherwise, he will be updated (only fields : email, firstname and lastname).
 *
 * @method  CreateOfferMessage  getMessage()
 * @method  $this               setMessage(array|CreateOfferMessage $message)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Offer\Message\CreateOfferMessageRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new CreateOfferMessageRequest('OFFER_ID');
 * $request->setMessage([
 *     'subject'  => 'Color question',
 *     'body'     => 'What is the color of the product?',
 *     'visible'  => true,
 *     'customer' => [
 *         'id'        => '304024KD',
 *         'civility'  => 'Mr',
 *         'firstname' => 'Nelson',
 *         'lastname'  => 'Deauberd',
 *     ],
 * ]);
 * $result = $api->createOfferMessage($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Message\MessageCreated
 * </code>
 */
class CreateOfferMessageRequest extends AbstractOfferRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/offers/{offer}/messages';

    /**
     * @var array
     */
    public $bodyParams = ['message'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'message' => [CreateOfferMessage::class, 'create'],
    ];

    /**
     * @param   string                      $offerId
     * @param   array|CreateOfferMessage    $message
     */
    public function __construct($offerId, $message)
    {
        parent::__construct($offerId);
        $this->setMessage($message);
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
        return $this->getMessage()->unwrap();
    }
}