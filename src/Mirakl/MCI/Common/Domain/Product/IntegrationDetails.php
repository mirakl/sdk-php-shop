<?php
namespace Mirakl\MCI\Common\Domain\Product;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  int     getInvalidProducts()
 * @method  $this   setInvalidProducts(int $count)
 * @method  int     getProductsNotAcceptedInTime()
 * @method  $this   setProductsNotAcceptedInTime(int $count)
 * @method  int     getProductsNotSynchronizedInTime()
 * @method  $this   setProductsNotSynchronizedInTime(int $count)
 * @method  int     getProductsReimported()
 * @method  $this   setProductsReimported(int $count)
 * @method  int     getProductsSuccessfullySynchronized()
 * @method  $this   setProductsSuccessfullySynchronized(int $count)
 * @method  int     getProductsWithSynchronizationIssues()
 * @method  $this   setProductsWithSynchronizationIssues(int $count)
 * @method  int     getProductsWithWrongIdentifiers()
 * @method  $this   setProductsWithWrongIdentifiers(int $count)
 * @method  int     getRejectedProducts()
 * @method  $this   setRejectedProducts(int $count)
 */
class IntegrationDetails extends MiraklObject
{}