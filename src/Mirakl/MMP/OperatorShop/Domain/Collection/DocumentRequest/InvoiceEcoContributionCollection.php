<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\InvoiceEcoContribution;

/**
 * @method InvoiceEcoContribution current()
 * @method InvoiceEcoContribution first()
 * @method InvoiceEcoContribution get($offset)
 * @method InvoiceEcoContribution offsetGet($offset)
 * @method InvoiceEcoContribution last()
 */
class InvoiceEcoContributionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = InvoiceEcoContribution::class;
}
