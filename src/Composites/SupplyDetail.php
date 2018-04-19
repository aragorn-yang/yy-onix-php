<?php

namespace AragornYang\Onix\Composites;

class SupplyDetail extends Composite
{
    /** @var string */
    protected $supplierSAN = '';
    /** @var string */
    protected $availabilityCode = '';
    /** @var Price */
    protected $price;

    public function getSupplierSAN(): string
    {
        return $this->supplierSAN;
    }

    public function setSupplierSAN(string $supplierSAN): void
    {
        $this->supplierSAN = $supplierSAN;
    }

    public function getAvailabilityCode(): string
    {
        return $this->availabilityCode;
    }

    public function setAvailabilityCode(string $availabilityCode): void
    {
        $this->availabilityCode = $availabilityCode;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function setPrice(\SimpleXMLElement $xml): void
    {
        $this->price = Price::buildFromXml($xml);
    }
}