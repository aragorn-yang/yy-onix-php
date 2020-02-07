<?php

namespace AragornYang\Onix\ProductFeatures\V30;

use AragornYang\Onix\Composites\V30\CollateralDetail;

trait HasCollateralDetail
{
    /** @var array|CollateralDetail */
    protected $collateralDetail;

    public function getCollateralDetail(): ?CollateralDetail
    {
        return $this->collateralDetail;
    }

    public function setCollateralDetail(\SimpleXMLElement $xml): void
    {
        $this->collateralDetail = CollateralDetail::buildFromXml($xml, $this);
    }
}