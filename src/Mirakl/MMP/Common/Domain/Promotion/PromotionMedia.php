<?php
namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getUrl()
 * @method  $this   setUrl(string $url)
 */
class PromotionMedia extends MiraklObject
{
    use LocalizableTrait;
}