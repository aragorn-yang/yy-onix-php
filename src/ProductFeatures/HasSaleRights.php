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
        $saleRights = SalesRights::buildFromXml($xml, $this);
        $this->salesRights[$saleRights->getSalesRightsType()] = $saleRights;
    }

    public function hasSalesRightsIn(string $code): ?bool
    {
        foreach (['03', '04', '05', '06'] as $type) {
            if (array_key_exists($type, $this->salesRights)) {
                if ($this->salesRights[$type]->contains($code)) {
                    return false;
                }
            }
        }
        foreach (['01', '02'] as $type) {
            if (array_key_exists($type, $this->salesRights)) {
                if ($this->salesRights[$type]->contains($code)
                    || $this->salesRights[$type]->forRestOfWorld()
                    || $this->salesRights[$type]->forWorld()
                ) {
                    return true;
                }
            }
        }
        return null;
    }
}