<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Language;

trait HasLanguages
{
    /** @var Language[] */
    protected $languages = [];

    public function setLanguage(\SimpleXMLElement $xml): void
    {
        $this->languages[] = Language::buildFromXml($xml, $this);
    }

    public function getLanguageCode(): string
    {
        foreach ($this->languages as $language) {
            if ($language->isTheLanguageOfText()) {
                return $language->getLanguageCode();
            }
        }
        return '';
    }
}