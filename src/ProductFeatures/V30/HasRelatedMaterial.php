<?php

namespace AragornYang\Onix\ProductFeatures\V30;

use AragornYang\Onix\Composites\V30\RelatedMaterial;
use SimpleXMLElement;

trait HasRelatedMaterial
{
    /** @var RelatedMaterial */
    protected $relatedMaterial;

    public function setRelatedMaterial(SimpleXMLElement $xml): void
    {
        $this->relatedMaterial = RelatedMaterial::buildFromXml($xml, $this);
    }

    public function getRelatedMaterial(): ?RelatedMaterial
    {
        return $this->relatedMaterial;
    }
}