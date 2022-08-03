<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\SalesRights;
use SimpleXMLElement;

trait HasSaleRights
{
    /** @var array|SalesRights[] */
    protected $salesRights = [];

    /**
     * @param  string  $type
     * @return SalesRights|null
     */
    public function getSalesRightsWithTypeOf(string $type): ?SalesRights
    {
        foreach ($this->salesRights as $salesRight) {
            if ($salesRight->getSalesRightsType() === $type) {
                return $salesRight;
            }
        }
        return null;
    }

    /**
     * @return SalesRights[]
     */
    public function getSalesRights(): array
    {
        return $this->salesRights;
    }

    public function setSalesRights(SimpleXMLElement $xml): void
    {
        $saleRights = SalesRights::buildFromXml($xml, $this);
        $this->salesRights[] = $saleRights;
    }

    public function hasSalesRightsIn(string $code): ?bool
    {
        foreach (['03', '04', '05', '06'] as $type) {
            if ($salesRights = $this->getSalesRightsWithTypeOf($type)) {
                if ($salesRights->contains($code)) {
                    return false;
                }
            }
        }
        foreach (['01', '02'] as $type) {
            if ($salesRights = $this->getSalesRightsWithTypeOf($type)) {
                if ($salesRights->contains($code)
                    || $salesRights->forRestOfWorld()
                    || $salesRights->forWorld()
                ) {
                    return true;
                }
            }
        }
        return null;
    }
}