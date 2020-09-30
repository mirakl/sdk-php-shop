<?php
namespace Mirakl\MMP\FrontOperator\Request\Order\AdditionalField;

use Mirakl\Core\Response\Decorator;
use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;
use Mirakl\MMP\FrontOperator\Domain\Order\AdditionalField\UpdateAdditionalFields;
use Mirakl\MMP\FrontOperator\Domain\Order\AdditionalField\UpdateAdditionalFieldsResult;
use Psr\Http\Message\ResponseInterface;

/**
 * (OR31) Update the additional fields of an order and its order lines
 *
 * Only specified additional field values will be updated.
 * In order to delete an additional field's value, set it to null or an empty string.
 * Note that you may not delete the value of a required additional field value.
 *
 * @method  UpdateAdditionalFields  getOrderAdditionalFields()
 * @method  $this                   setOrderAdditionalFields(array|UpdateAdditionalFields $additionalFields)
 *
 * Example :
 *
 * <code>
 * <?php
 *
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Domain\Order\AdditionalField\UpdateAdditionalFields;
 * use Mirakl\MMP\FrontOperator\Request\Order\AdditionalField\UpdateAdditionalFieldsRequest;
 *
 * try {
 * // Instantiating the Mirakl API Client
 * $client = new FrontApiClient('API_URL', 'API_KEY');
 *
 * // your order additional fields input
 * $input = [
 *  'order_additional_fields' => [
 *      [
 *          'type' => 'NUMERIC',
 *          'code' => 'ecotax',
 *          'value' =>  '42'
 *      ]
 *  ],
 * 'order_lines' => [
 *      [
 *          'order_line_id' => '1000',
 *          'order_line_additional_fields' => [
 *              [
 *                  'type' => 'BOOLEAN',
 *                  'code' => 'gift-wrap',
 *                  'value' => 'true'
 *              ]
 *          ]
 *      ]
 *  ]
 * ];
 *
 * $update = new UpdateAdditionalFields();
 * $update->setOrderAdditionalFields($input['order_additional_fields']);
 * $update->setOrderLines($input['order_lines']);
 *
 * // Building request with your order id
 * $request = new UpdateAdditionalFieldsRequest('M2-QA-411-WHOLESALE000000020');
 * $request->setOrderAdditionalFields($update);
 *
 * // Mirakl\MMP\FrontOperator\Domain\Order\AdditionalField\UpdateAdditionalFieldsResult
 * $result = $client->updateOrderAdditionalFields($request);
 *
 * // Get Result
 * // Mirakl\MMP\FrontOperator\Domain\Order\AdditionalField\UpdateAdditionalFieldsWithErrors
 * var_dump($result->getOrderUpdateErrors());
 *
 * // Get updated additional fields
 * // Mirakl\MMP\FrontOperator\Domain\Order\AdditionalField\UpdateAdditionalFields
 * var_dump($result->getOrderUpdateResult());
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if the requested object is not found or if an error occurs
 * var_dump($e->getMessage());
 * }
 * </code>
 */
class UpdateAdditionalFieldsRequest extends AbstractOrderRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/additional_fields';

    /**
     * @var array
     */
    public $bodyParams = ['order_additional_fields'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_additional_fields' => [UpdateAdditionalFields::class, 'create'],
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new Decorator\Closure(function(ResponseInterface $response) {
            $data = (new Decorator\AssocArray())->decorate($response);

            $result = new UpdateAdditionalFieldsResult();

            if (isset($data['order_update_result'])) {
                $result->setOrderUpdateResult($data['order_update_result']);
            }
            if (isset($data['order_update_errors'])) {
                $result->setOrderUpdateErrors($data['order_update_errors']);
            }

            return $result;
        });
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getOrderAdditionalFields()->toArray();
    }
}