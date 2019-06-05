<?php
namespace Mirakl\MMP\Shop\Request\Order\AdditionalField;

use Mirakl\Core\Response\Decorator;
use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;
use Mirakl\MMP\Shop\Domain\Order\AdditionalField\UpdateAdditionalFields;
use Mirakl\MMP\Shop\Domain\Order\AdditionalField\UpdateAdditionalFieldsResult;
use Psr\Http\Message\ResponseInterface;

/**
 * (OR31) Update the additional fields of an order and its order lines
 *
 * Only specified additional field values will be updated.
 * In order to delete an additional field's value, set it to null or an empty string.
 * Note that you may not delete the value of a required additional field value.
 *
 * @method  UpdateAdditionalFields  getOrderAdditionalFields()
 * @method  $this                   setOrderAdditionalFields(array|UpdateAdditionalFields $orderAdditionalFields)
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
    public $bodyParams = ['order_additional_fields', 'order_lines'];

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
}