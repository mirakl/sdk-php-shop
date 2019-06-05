<?php
namespace Mirakl\Core\Domain;

trait LocalizableTrait
{
    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @return  string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param   string  $locale
     * @return  $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }
}