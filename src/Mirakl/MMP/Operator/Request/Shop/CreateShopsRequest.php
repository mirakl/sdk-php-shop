<?php
namespace Mirakl\MMP\Operator\Request\Shop;

use Mirakl\MMP\Operator\Domain\Collection\Shop\Create\CreateShopCollection;
use Mirakl\MMP\FrontOperator\Request\Shop\AbstractCreateShopsRequest;

/**
 * (S06) Create shops
 *
 * @method  CreateShopCollection    getShops()
 * @method  $this                   setShops(array|CreateShopCollection $shops)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Shop\CreateShopsRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new CreateShopsRequest([
 *     [
 *         'address' => [
 *             'civility' => 'Mr',
 *             'firstname' => 'Bob',
 *             'lastname' => 'Smith',
 *             'street1' => '10 E 40th St',
 *             'street2' => '8th floor',
 *             'zip_code' => '10016',
 *             'state' => 'New York',
 *             'city' => 'New York City',
 *             'country' => 'USA',
 *             'phone' => '(646) 320-3881',
 *             'phone_secondary' => '(212) 204-1126'
 *         ],
 *         'email' => 'sps@sps.com',
 *         'fax' => 'none',
 *         'web_site' => 'http://swisspostsolutions.com',
 *         'operator_internal_id' => '94R9U3DI',
 *         'shipping_country' => 'USA',
 *         'description' => 'Sells letters, stamps...',
 *         'return_policy' => 'All returns are free',
 *         'pro_details' => [
 *             'corporate_name' => 'Swiss Post Solutions',
 *             'identification_number' => 'US-329JD93KKL',
 *             'tax_identification_number' => 'USNY9403999'
 *         ],
 *         'shop_name' => 'Swiss Post Store',
 *         'is_professional' => true,
 *         'closed_from_date' => '2014-12-12T12:12:00.000+0000',
 *         'closed_to_date' => '2014-12-20T12:12:00.000+0000',
 *         'immunity_date' => '2015-01-01T00:00:00.000+0000',
 *         'shop_additional_fields' => [
 *             [
 *               'code' => 'erp-reference-key',
 *               'value' => '9ZE8DOIIII'
 *             ]
 *         ],
 *         'payment_info' => [
 *             '@type' => 'ABA',
 *             'owner' => 'Matt Marteens',
 *             'bank_name' => 'Chase',
 *             'bank_account_number' => '839383939',
 *             'routing_number' => '121000248',
 *             'bic' => 'BOAUSIIE999'
 *         ],
 *         'new_user' => [
 *             'email' => 'user@email.com',
 *             'password' => 'password1234'
 *         ]
 *     ]
 * ]);
 * $result = $api->createShops($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Shop\Create\CreatedShops
 * </code>
 */
class CreateShopsRequest extends AbstractCreateShopsRequest
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shops' => [CreateShopCollection::class, 'create'],
    ];

    /**
     * @param   mixed   $shops
     */
    public function __construct($shops)
    {
        parent::__construct();
        $this->setShops($shops);
    }
}