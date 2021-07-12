<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\Composites\V30\RelatedWork;
use AragornYang\Onix\Composites\V30\RelatedProduct;

class RelatedMaterial extends Composite
{
    /** @var RelatedWork[] */
    protected $relatedWorks;

    /** @var RelatedProduct[] */
    protected $relatedProducts;

    public function setRelatedWork(\SimpleXMLElement $xml): void
    {
        $this->relatedWorks[] = RelatedWork::buildFromXml($xml, $this);
    }

    public function getRelatedWorks(): array
    {
        return $this->relatedWorks;
    }

    public function setRelatedProduct(\SimpleXMLElement $xml): void
    {
        $this->relatedProducts[] = RelatedProduct::buildFromXml($xml, $this);
    }

    public function getRelatedProducts(): array
    {
        return $this->relatedProducts ?: [];
    }
}
