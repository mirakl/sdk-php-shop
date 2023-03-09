<?php
namespace Mirakl\MMP\Shop\Request\Currency;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Shop\Domain\Collection\Currency\CurrencyCollection;

/**
 * (CUR01) List currency codes and labels
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Currency\GetCurrenciesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY');
 *
 * $request = new GetCurrenciesRequest();
 *
 * $request->setLocale('en_US');
 *
 * $currencies = $api->getCurrencies($request);
 *
 * // $currencies => @see \Mirakl\MMP\Shop\Domain\Collection\Currency\CurrencyCollection
 *
 * </code>
 */
class GetCurrenciesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/currencies';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CurrencyCollection::decorator('currencies');
    }
}