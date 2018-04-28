<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\RelatedProduct;

trait HasRelatedProducts
{
    /** @var array|RelatedProduct[] */
    protected $relatedProducts = [];

    public function getRelatedProducts(): array
    {
        return $this->relatedProducts;
    }

    public function getRelatedProductISBN13s(): array
    {
        $isbn13s = [];
        foreach ($this->relatedProducts as $relatedProduct) {
            $isbn13s[] = $relatedProduct->getIsbn13();
        }
        return $isbn13s;
    }

    public function setRelatedProduct(\SimpleXMLElement $xml): void
    {
        $this->relatedProducts[] = RelatedProduct::buildFromXml($xml, $this);
    }
}