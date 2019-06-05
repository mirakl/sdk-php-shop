<?php
namespace Mirakl\MMP\Common\Request\Locale;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Locale\LocaleCollection;

/**
 * (L01) Get active locales
 */
class GetLocalesRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/locales';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return LocaleCollection::decorator('locales');
    }
}