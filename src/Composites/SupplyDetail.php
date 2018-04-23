<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList54AvailabilityStatus;

class SupplyDetail extends Composite
{
    /** @var string */
    protected $supplierSAN = '';
    /** @var string|CodeInList */
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
        return $this->availabilityCode ? $this->availabilityCode->getCode() : '';
    }

    public function getAvailabilityCodeDesc(): string
    {
        return $this->availabilityCode ? $this->availabilityCode->getDesc() : '';
    }

    public function setAvailabilityCode(string $code): void
    {
        $this->availabilityCode = new CodeInList(CodeList54AvailabilityStatus::class, $code);
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