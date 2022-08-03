<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Stock;
use SimpleXMLElement;

trait HasStock
{
    /** @var Stock */
    protected $stock;

    public function getStock(): ?Stock
    {
        return $this->stock;
    }

    public function setStock(SimpleXMLElement $xml): void
    {
        $this->stock = Stock::buildFromXml($xml, $this);
    }
}