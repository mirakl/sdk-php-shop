<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Product\Offer\ProductReferenceCollection;

/**
 * @method ProductReferenceCollection getReferences()
 * @method $this                      setReferences(ProductReferenceCollection|array $references)
 * @method string                     getTitle()
 * @method $this                      setTitle(string $title)
 */
class ProductRelatedToDocumentRequest extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'references' => [ProductReferenceCollection::class, 'create'],
    ];
}