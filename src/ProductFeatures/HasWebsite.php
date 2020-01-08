<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Website;

trait HasWebsite
{
    /** @var array|Website */
    protected $website = [];

    public function setWebsite(\SimpleXMLElement $xml): void
    {
        $this->website[] = Website::buildFromXml($xml, $this);
    }

    public function getWebsites(): array
    {
        return $this->website;
    }
}