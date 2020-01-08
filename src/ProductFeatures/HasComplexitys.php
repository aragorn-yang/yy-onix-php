<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Complexity;

trait HasComplexitys
{
    /** @var array */
    protected $complexity = [];

    public function getComplexity(): array
    {
        return $this->complexity;
    }

    public function setComplexity(\SimpleXMLElement $xml): void
    {
        $this->complexity[] = Complexity::buildFromXml($xml, $this);
    }
}