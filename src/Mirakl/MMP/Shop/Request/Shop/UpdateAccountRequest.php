<?php
namespace Mirakl\MMP\Shop\Request\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Shop\Domain\Shop\Update\UpdateShopAccount;
use Mirakl\MMP\Shop\Domain\Shop\UpdatedShopAndError;

/**
 * (A02) Update shop information
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Domain\Shop\Update\UpdateShopAccount;
 * use Mirakl\MMP\Shop\Request\Shop\UpdateAccountRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $updateShopAccount = new UpdateShopAccount([
 *     'shop_name'       => 'Acme Shop',
 *     'description'     => 'This is the description of this shop',
 *     'web_site'        => 'https://example.com',
 *     'email'           => 'my-store@example.com',
 *     'is_professional' => true,
 *     'channels'        => ['US'],
 *     'address' => [
 *         'firstname'       => 'John',
 *         'lastname'        => 'Doe',
 *         'phone'           => '213-509-6996',
 *         'phone_secondary' => '213-509-6995',
 *         'state'           => 'Manhattan',
 *         'street1'         => '30, Prince Street',
 *         'street2'         => '1st floor',
 *         'city'            => 'New York',
 *         'zip_code'        => '10012',
 *         'country'         => 'USA',
 *     ],
 *     'pro_details' => [
 *         'corporate_name'            => 'Mirakl Inc.',
 *         'identification_number'     => 'SDFIZEHF239',
 *         'tax_identification_number' => 'FRIEZOF03',
 *     ],
 *     'payment_info' => [
 *         '@type'     => 'IBAN',
 *         'bank_name' => 'Acme Bank',
 *         'bic'       => 'AGRIFRPPXX2',
 *         'iban'      => 'FR7210096000507396196831A89',
 *         'owner'     => 'Super Shop',
 *     ],
 *     'shop_additional_fields' => [
 *         [
 *             'code'  => 'field_1',
 *             'value' => 'Lorem ipsum dolor sit amet',
 *         ]
 *     ],
 * ]);
 *
 * $request = new UpdateAccountRequest($updateShopAccount);
 *
 * $result = $client->updateAccount($request);
 *
 * // $result => @see \Mirakl\MMP\Shop\Domain\Shop\UpdatedShopAndError
 * </code>
 *
 * @method UpdateShopAccount getUpdateShopAccount()
 * @method $this             setUpdateShopAccount(UpdateShopAccount|array $updateShopAccount)
 */
class UpdateAccountRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/account';

    /**
     * @param UpdateShopAccount|array $updateShopAccount
     */
    public function __construct($updateShopAccount)
    {
        parent::__construct();
        $this->setUpdateShopAccount($updateShopAccount);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getUpdateShopAccount()->toArray();
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return UpdatedShopAndError::decorator();
    }
}