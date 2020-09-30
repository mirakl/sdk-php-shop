<?php
namespace Mirakl\MMP\Front\Domain\Order\Evaluation;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 * @method  string  getResponse()
 * @method  $this   setResponse(string $response)
 */
class CreateOrderEvaluationAssessment extends MiraklObject
{
    /**
     * @param   string  $code
     * @param   string  $response
     */
    public function __construct($code, $response)
    {
        parent::__construct();
        $this->setCode($code);
        $this->setResponse($response);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        return new static($data['code'], $data['response']);
    }
}