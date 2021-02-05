<?php
namespace Mirakl\Core\Request;

use Mirakl\MMP\Common\Domain\Product\Offer\ProductReference;

/**
 * Example of product references:
 * <code>
 * $productReferences = [
 *     'EAN' => ['3515586944589', '3165140467278', '...'],
 *     '<type>' => ['<product_id>', '<product_id>', '...'],
 *     '...' => ['...', '...']
 * ];
 * </code>
 */
trait ProductReferencesTrait
{
    /**
     * @var array
     */
    protected $productReferences = [];

    /**
     * @param   string  $typeId
     * @param   string  $productId
     * @return  $this
     */
    public function addProductReference($typeId, $productId)
    {
        if (!isset($this->productReferences[$typeId])) {
            $this->productReferences[$typeId] = [];
        }
        $this->productReferences[$typeId][] = $productId;

        return $this;
    }

    /**
     * @return  array
     */
    public function getProductReferences()
    {
        return $this->productReferences;
    }

    /**
     * @param   array   $references
     * @return  $this
     */
    public function setProductReferences(array $references)
    {
        foreach ($references as $type => $value) {
            if ($value instanceof ProductReference) {
                $this->addProductReference($value->getType(), $value->getValue());
            } else {
                $this->productReferences[$type] = $value;
            }
        }

        return $this;
    }
}