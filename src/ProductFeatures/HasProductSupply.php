<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\SupplyDetail;
use AragornYang\Onix\Composites\V30\ProductSupply;

trait HasProductSupply
{
    /** @var ProductSupply */
    protected $productSupply;

    /**
     * @return SupplyDetail[]
     */
    public function getSupplyDetails(): array
    {
        return $this->productSupply->getSupplyDetails();
    }

    public function getProductSupply(): ProductSupply
    {
        return $this->productSupply;
    }

    public function getSupplyDetail(): ProductSupply
    {
        return $this->productSupply[0];
    }

    public function setProductSupply(\SimpleXMLElement $xml): void
    {
        /** @var ProductSupply $descriptiveDetail */
        $this->productSupply = ProductSupply::buildFromXml($xml, $this);
    }
}
