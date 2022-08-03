<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\ProductClassification;
use SimpleXMLElement;

trait HasProductClassifications
{
    /** @var array|ProductClassification[] */
    protected $productClassifications = [];

    /**
     * @return ProductClassification[]
     */
    public function getProductClassifications(): array
    {
        return $this->productClassifications;
    }

    public function setProductClassification(SimpleXMLElement $xml): void
    {
        $this->productClassifications[] = ProductClassification::buildFromXml($xml, $this);
    }
}