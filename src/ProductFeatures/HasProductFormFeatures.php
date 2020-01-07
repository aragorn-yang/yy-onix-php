<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\ProductFormFeature;

trait HasProductFormFeatures
{
    /** @var array|ProductFormFeature[] */
    protected $productFormFeatures = [];

    /**
     * @return ProductFormFeature[]
     */
    public function getProductFormFeature(): array
    {
        return $this->productFormFeatures;
    }

    public function setProductFormFeature(\SimpleXMLElement $xml): void
    {
        $this->productFormFeatures[] = ProductFormFeature::buildFromXml($xml, $this);
    }
}