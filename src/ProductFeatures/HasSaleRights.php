<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\SalesRights;

trait HasSaleRights
{
    /** @var array|SalesRights[] */
    protected $salesRights = [];

    /**
     * @param string $type
     * @return SalesRights|null
     */
    public function getSalesRightsWithTypeOf(string $type): ?SalesRights
    {
        return $this->salesRights[$type] ?? null;
    }

    /**
     * @return SalesRights[]
     */
    public function getSalesRights(): array
    {
        return $this->salesRights;
    }

    public function setSalesRights(\SimpleXMLElement $xml): void
    {
        $saleRights = SalesRights::buildFromXml($xml);
        $this->salesRights[$saleRights->getSalesRightsType()] = $saleRights;
    }
}