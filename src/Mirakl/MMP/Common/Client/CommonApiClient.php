<?php
namespace Mirakl\MMP\Common\Client;

use Mirakl\Core\Client\AbstractApiClient;
use Mirakl\MMP\Common\Domain\Collection\Locale\LocaleCollection;
use Mirakl\MMP\Common\Domain\Version;
use Mirakl\MMP\Common\Request\Locale\GetLocalesRequest;
use Mirakl\MMP\Common\Request\Version\GetVersionRequest;

class CommonApiClient extends AbstractApiClient
{
    /**
     * (L01) Get active locales
     *
     * @return  LocaleCollection
     */
    public function getLocales()
    {
        return (new GetLocalesRequest())->run($this);
    }

    /**
     * (V01) Retrieve Mirakl environment version
     *
     * @return  Version
     */
    public function getVersion()
    {
        return (new GetVersionRequest())->run($this);
    }
}