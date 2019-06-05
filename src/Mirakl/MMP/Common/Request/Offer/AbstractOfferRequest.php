<?php
namespace Mirakl\MMP\Common\Request\Offer;

use Mirakl\Core\Request\AbstractRequest;

/**
 * @method  string  getOfferId()
 * @method  $this   setOfferId(string $offerId)
 */
abstract class AbstractOfferRequest extends AbstractRequest
{
    /**
     * @var array
     */
    protected $uriVars = [
        '{offer}' => 'offer_id',
    ];

    /**
     * @param   string  $offerId
     */
    public function __construct($offerId)
    {
        parent::__construct();
        $this->setOfferId($offerId);
    }
}