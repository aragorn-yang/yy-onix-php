<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList49RegionCodeSimplified;
use AragornYang\Onix\CodeLists\CodeList53ReturnsConditionsCodeType;
use AragornYang\Onix\CodeLists\CodeList54AvailabilityStatus;
use AragornYang\Onix\CodeLists\CodeList55DateFormat;
use AragornYang\Onix\CodeLists\CodeList57UnpricedItemType;
use AragornYang\Onix\CodeLists\CodeList65ProductAvailability;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;
use AragornYang\Onix\CodeLists\CodeList93SupplierRole;
use AragornYang\Onix\ProductFeatures\HasExpectedShipDate;
use AragornYang\Onix\ProductFeatures\HasStock;
use AragornYang\Onix\ProductFeatures\HasWebsite;
use AragornYang\Onix\Composites\Reissue;

class SupplyDetail extends Composite
{
    use HasExpectedShipDate, HasStock, HasWebsite;
    /** @var CodeInList */
    protected $supplierRole;
    /** @var string */
    protected $supplierSAN = '';
    /** @var string */
    protected $SupplierName = '';
    /** @var CodeInList */
    protected $availabilityCode;
    /** @var CodeInList */
    protected $productAvailability;
    /** @var CodeInList */
    protected $returnsCodeType;
    /** @var string */
    protected $returnsCode = '';
    /**
     * @var int Estimated time to supply
     */
    protected $orderTime = 0;
    /** @var int */
    protected $packQuantity = 10;
    /** @var CodeInList[] */
    protected $supplyToCountries = [];
    /** @var CodeInList[] */
    protected $supplyToTerritories = [];
    /** @var Price[] */
    protected $prices = [];

    /** @var string */
    protected $dateFormat = '';

    /** @var string */
    protected $onSaleDate = '';

    /** @var array */
    protected $telephoneNumber = [];

    /** @var array */
    protected $faxNumber = [];

    /** @var array */
    protected $emailAddress = [];

    /** @var string */
    protected $lastDateForReturns = '';

    /** @var array|CodeInList */
    protected $unpricedItemType;

    /** @var string */
    protected $supplierEANLocationNumber = '';

    /** @var Reissue */
    protected $reissue;

    /** @var array */
    protected $supplyToCountryExcluded = [];

    public function getSupplierRole(): string
    {
        return $this->supplierRole ? $this->supplierRole->code() : '';
    }

    public function getSupplierRoleDesc(): string
    {
        return $this->supplierRole ? $this->supplierRole->desc() : '';
    }

    public function setSupplierRole(string $code): void
    {
        $this->supplierRole = new CodeInList(CodeList93SupplierRole::class, $code);
    }

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

    public function getProductAvailability(): string
    {
        return $this->productAvailability ? $this->productAvailability->code() : '';
    }

    public function getProductAvailabilityDesc(): string
    {
        return $this->productAvailability ? $this->productAvailability->desc() : '';
    }

    public function setProductAvailability(string $code): void
    {
        $this->productAvailability = new CodeInList(CodeList65ProductAvailability::class, $code);
    }

    public function getReturnsCodeType(): string
    {
        return $this->returnsCodeType ? $this->returnsCodeType->code() : '';
    }

    public function getReturnsCodeTypeDesc(): string
    {
        return $this->returnsCodeType ? $this->returnsCodeType->desc() : '';
    }

    public function setReturnsCodeType(string $code): void
    {
        $this->returnsCodeType = new CodeInList(CodeList53ReturnsConditionsCodeType::class, $code);
    }

    /**
     * @return Price[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    public function setPrice(\SimpleXMLElement $xml): void
    {
        $this->prices[] = Price::buildFromXml($xml, $this);
    }

    public function getOrderTime(): int
    {
        return $this->orderTime;
    }

    public function setOrderTime(string $orderTime): void
    {
        $this->orderTime = (int)$orderTime;
    }

    public function getPackQuantity(): int
    {
        return $this->packQuantity;
    }

    public function setPackQuantity(string $packQuantity): void
    {
        $this->packQuantity = (int)$packQuantity;
    }

    public function getReturnsCode(): string
    {
        return $this->returnsCode;
    }

    public function setReturnsCode(string $returnsCode): void
    {
        $this->returnsCode = $returnsCode;
    }

    public function getSupplyToCountries(): array
    {
        return $this->supplyToCountries;
    }

    public function setSupplyToCountry(string $codes): void
    {
        foreach (explode(' ', $codes) as $code) {
            if (!$code) {
                continue;
            }
            new CodeInList(CodeList91CountryCodeISO31661::class, $code);
            $this->supplyToCountries[] = $code;
        }
    }

    public function getSupplyToTerritories(): array
    {
        return $this->supplyToTerritories;
    }

    public function setSupplyToTerritory(string $codes): void
    {
        foreach (explode(' ', $codes) as $code) {
            if (!$code) {
                continue;
            }
            new CodeInList(CodeList49RegionCodeSimplified::class, $code);
            $this->supplyToTerritories[] = $code;
        }
    }

    public function setDateFormat(string $code)
    {
        $this->dateFormat = new CodeInList(CodeList55DateFormat::class, $code);
    }

    public function getDateFormat()
    {
        return $this->dateFormat ? $this->dateFormat->code() : '';
    }

    public function getDateFormatDesc()
    {
        return $this->dateFormat ? $this->dateFormat->desc() : '';
    }

    public function setOnSaleDate(string $onSaleDate): void 
    {
        $this->onSaleDate = $onSaleDate;
    }

    public function getOnSaleDate(): string 
    {
        return $this->onSaleDate;
    }

    public function setTelephoneNumber(string $telephoneNumber): void
    {
        $this->telephoneNumber[] = $telephoneNumber;
    }

    public function getTelephoneNumber(): array
    {
        return $this->telephoneNumber;
    }

    public function setFaxNumber(string $faxNumber): void
    {
        $this->faxNumber[] = $faxNumber;
    }

    public function getFaxNumber(): array
    {
        return $this->faxNumber;
    }

    public function setEmailAddress(string $emailAddress): void
    {
        $this->emailAddress[] = $emailAddress;
    }

    public function getEmailAddress(): array
    {
        return $this->emailAddress;
    }

    public function getLastDateForReturns(): string
    {
        return $this->lastDateForReturns;
    }

    public function setLastDateForReturns(string $value): void
    {
        $this->lastDateForReturns = $value;
    }

    public function setUnpricedItemType(string $code): void 
    {
        $this->unpricedItemType = new CodeInList(CodeList57UnpricedItemType::class, $code);
    }

    public function getUnpricedItemType(): string
    {
        return $this->unpricedItemType->code();
    }

    public function getUnpricedItemTypeDesc(): string
    {
        return $this->unpricedItemType->desc();
    }

    public function setSupplierEANLocationNumber(string $value): void
    {
        $this->supplierEANLocationNumber = $value;
    }

    public function getSupplierEANLocationNumber(): string
    {
        return $this->supplierEANLocationNumber;
    }

    public function setReissue(\SimpleXMLElement $xml): void
    {
        $this->reissue = Reissue::buildFromXml($xml, $this);
    }

    public function getReissue(): ?Reissue
    {
        return $this->reissue;
    }

    public function setSupplyToCountryExcluded(string $code): void
    {
        $codeList = explode(' ', $code);
        foreach ($codeList as $_code) {
            $this->supplyToCountryExcluded[] = new CodeInList(CodeList91CountryCodeISO31661::class, $_code);
        }
    }

    public function getSupplyToCountryExcluded(): array
    {
        return $this->supplyToCountryExcluded;
    }
}