<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\SupplyDetail;

trait HasSupplyDetails
{
    /** @var SupplyDetail[] */
    protected $supplyDetails = [];

    /**
     * @return SupplyDetail[]
     */
    public function getSupplyDetails(): array
    {
        return $this->supplyDetails;
    }

    public function setSupplyDetail(\SimpleXMLElement $xml): void
    {
        $this->supplyDetails[] = SupplyDetail::buildFromXml($xml, $this);
    }
}