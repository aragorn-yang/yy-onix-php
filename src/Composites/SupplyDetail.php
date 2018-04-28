<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList54AvailabilityStatus;
use AragornYang\Onix\ProductFeatures\HasExpectedShipDate;

class SupplyDetail extends Composite
{
    use HasExpectedShipDate;
    /** @var string */
    protected $supplierSAN = '';
    /** @var string */
    protected $SupplierName = '';
    /** @var string|CodeInList */
    protected $availabilityCode = '';
    /**
     * @var int Estimated time to supply
     */
    protected $orderTime = 0;
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

    public function getSupplierName(): string
    {
        return $this->SupplierName;
    }

    public function setSupplierName(string $SupplierName): void
    {
        $this->SupplierName = $SupplierName;
    }

    public function getAvailabilityCode(): string
    {
        return $this->availabilityCode ? $this->availabilityCode->code() : '';
    }

    public function getAvailabilityCodeDesc(): string
    {
        return $this->availabilityCode ? $this->availabilityCode->desc() : '';
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
        $this->price = Price::buildFromXml($xml, $this);
    }

    public function getOrderTime(): int
    {
        return $this->orderTime;
    }

    public function setOrderTime(string $orderTime): void
    {
        $this->orderTime = (int)$orderTime;
    }
}