<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\ProductWebsite;

trait HasProductWebsites
{
    /** @var array|ProductWebsite[] */
    protected $productWebsite = [];

    public function getProductWebsite(): array
    {
        return $this->productWebsite;
    }

    public function setProductWebsite(\SimpleXMLElement $xml): void
    {
        $this->productWebsite[] = ProductWebsite::buildFromXml($xml, $this);
    }
}