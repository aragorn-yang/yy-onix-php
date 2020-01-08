<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\MarketRepresentation;

trait HasMarketRepresentations
{
    /** @var array */
    protected $marketRepresentation = [];

    public function getMarketRepresentation(): array
    {
        return $this->marketRepresentation;
    }

    public function setMarketRepresentation(\SimpleXMLElement $xml): void
    {
        $this->marketRepresentation[] = MarketRepresentation::buildFromXml($xml, $this);
    }
}