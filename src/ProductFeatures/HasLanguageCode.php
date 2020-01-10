<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasLanguageCode
{
    /** @var string */
    protected $languageCode = '';

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }
}