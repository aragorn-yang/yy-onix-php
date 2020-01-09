<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList49RegionCodeSimplified;
use AragornYang\Onix\CodeLists\CodeList58PriceTypeCode;
use AragornYang\Onix\CodeLists\CodeList61PriceStatus;
use AragornYang\Onix\CodeLists\CodeList62TaxRateCoded;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;
use AragornYang\Onix\CodeLists\CodeList96CurrencyCodeISO4217;
use AragornYang\Onix\CodeLists\CodeList59PriceTypeQualifier;

class Price extends Composite
{
    /** @var CodeInList */
    protected $priceTypeCode;
    /** @var string */
    protected $priceTypeDescription = '';
    /** @var CodeInList */
    protected $priceStatus;
    /** @var float */
    protected $priceAmount = 0.0;
    /** @var float */
    protected $taxRatePercent1 = 0.0;
    /** @var float */
    protected $taxableAmount1 = 0.0;
    /** @var float */
    protected $taxAmount1 = 0.0;
    /** @var CodeInList */
    protected $currencyCode;
    /** @var CodeInList */
    protected $taxRateCode1;
    /** @var DiscountCoded[] */
    protected $discountsCoded = [];
    /** @var string */
    protected $BICDiscountGroupCode = '';
    /** @var string */
    protected $priceEffectiveFrom = '';
    /** @var CodeInList[] */
    protected $countryCodes = [];
    /** @var CodeInList[] */
    protected $territories = [];
    /** @var CodeInList */
    protected $priceQualifier;
    /** @var array */
    protected $countryExcluded = [];
    /** @var CodeInList */
    protected $taxRateCode2;
    /** @var string */
    protected $taxRatePercent2 = '';
    /** @var string */
    protected $taxableAmount2 = '';

    protected const TYPE_OF_RRP_EXC_TAX = '01';
    protected const TYPE_OF_RRP_INC_TAX = '02';

    public function isRrpExcTax(): bool
    {
        return (string)$this->priceTypeCode === self::TYPE_OF_RRP_EXC_TAX;
    }

    public function isRrpIncTax(): bool
    {
        return (string)$this->priceTypeCode === self::TYPE_OF_RRP_INC_TAX;
    }

    public function getPriceTypeCode(): string
    {
        return $this->priceTypeCode ? $this->priceTypeCode->code() : '';
    }

    public function getPriceTypeCodeDesc(): string
    {
        return $this->priceTypeCode ? $this->priceTypeCode->desc() : '';
    }

    public function setPriceTypeCode(string $code): void
    {
        $this->priceTypeCode = new CodeInList(CodeList58PriceTypeCode::class, $code);
    }

    /**
     * for V3.0
     * @param string $code
     */
    public function setPriceType(string $code): void
    {
        $this->priceTypeCode = new CodeInList(CodeList58PriceTypeCode::class, $code);
    }

    public function getPriceTypeDescription(): string
    {
        return $this->priceTypeDescription;
    }

    public function setPriceTypeDescription(string $priceTypeDescription): void
    {
        $this->priceTypeDescription = $priceTypeDescription;
    }

    public function getPriceStatus(): string
    {
        return $this->priceStatus ? $this->priceStatus->code() : '';
    }

    public function getPriceStatusDesc(): string
    {
        return $this->priceStatus ? $this->priceStatus->desc() : '';
    }

    public function setPriceStatus(string $code): void
    {
        $this->priceStatus = new CodeInList(CodeList61PriceStatus::class, $code);
    }

    public function getPriceAmount(): float
    {
        return $this->priceAmount;
    }

    public function setPriceAmount(string $priceAmount): void
    {
        $this->priceAmount = (float)$priceAmount;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode ? $this->currencyCode->code() : '';
    }

    public function getCurrencyCodeDesc(): string
    {
        return $this->currencyCode ? $this->currencyCode->desc() : '';
    }

    public function setCurrencyCode(string $code): void
    {
        $this->currencyCode = new CodeInList(CodeList96CurrencyCodeISO4217::class, $code);
    }

    public function getTaxRateCode1(): string
    {
        return $this->taxRateCode1 ? $this->taxRateCode1->code() : '';
    }

    public function getTaxRateCode1Desc(): string
    {
        return $this->taxRateCode1 ? $this->taxRateCode1->desc() : '';
    }

    public function setTaxRateCode1(string $code): void
    {
        $this->taxRateCode1 = new CodeInList(CodeList62TaxRateCoded::class, $code);
    }

    /**
     * @return DiscountCoded[]
     */
    public function getDiscountsCoded(): array
    {
        return $this->discountsCoded;
    }

    public function setDiscountCoded(\SimpleXMLElement $xml): void
    {
        $this->discountsCoded[] = DiscountCoded::buildFromXml($xml, $this);
    }

    public function getTaxRatePercent1(): float
    {
        return $this->taxRatePercent1;
    }

    public function setTaxRatePercent1(string $taxRatePercent1): void
    {
        $this->taxRatePercent1 = (float)$taxRatePercent1;
    }

    public function getTaxableAmount1(): float
    {
        return $this->taxableAmount1;
    }

    public function setTaxableAmount1(string $taxableAmount1): void
    {
        $this->taxableAmount1 = (float)$taxableAmount1;
    }

    public function getTaxAmount1(): float
    {
        return $this->taxAmount1;
    }

    public function setTaxAmount1(string $taxAmount1): void
    {
        $this->taxAmount1 = (float)$taxAmount1;
    }

    public function getPriceEffectiveFrom(): string
    {
        return $this->priceEffectiveFrom;
    }

    public function setPriceEffectiveFrom(string $priceEffectiveFrom): void
    {
        $this->priceEffectiveFrom = $priceEffectiveFrom;
    }

    public function getBICDiscountGroupCode(): string
    {
        return $this->BICDiscountGroupCode;
    }

    public function setBICDiscountGroupCode(string $priceEffectiveFrom): void
    {
        $this->BICDiscountGroupCode = $priceEffectiveFrom;
    }

    public function getCountryCodes(): array
    {
        return $this->countryCodes;
    }

    public function setCountryCode(string $codes): void
    {
        foreach (explode(' ', $codes) as $code) {
            if (!$code) {
                continue;
            }
            new CodeInList(CodeList91CountryCodeISO31661::class, $code);
            $this->countryCodes[] = $code;
        }
    }

    public function getTerritories(): array
    {
        return $this->territories;
    }

    public function setTerritory(string $codes): void
    {
        foreach (explode(' ', $codes) as $code) {
            if (!$code) {
                continue;
            }
            new CodeInList(CodeList49RegionCodeSimplified::class, $code);
            $this->territories[] = $code;
        }
    }

    public function setPriceQualifier(string $code): void
    {
        $this->priceQualifier = new CodeInList(CodeList59PriceTypeQualifier::class, $code);
    }

    public function getPriceQualifier(): string
    {
        return $this->priceQualifier ? $this->priceQualifier->code() : '';
    }

    public function getPriceQualifierDesc(): string
    {
        return $this->priceQualifier ? $this->priceQualifier->desc() : '';
    }

    public function setCountryExcluded(string $code): void
    {
        $codeList = explode(' ', $code);
        foreach ($codeList as $_code) {
            $this->countryExcluded[] = new CodeInList(CodeList91CountryCodeISO31661::class, $_code);
        }
    }

    public function getCountryExcluded(): array
    {
        return $this->countryExcluded;
    }

    public function setTaxRateCode2(string $code): void
    {
        $this->taxRateCode2 = new CodeInList(CodeList62TaxRateCoded::class, $code);
    }

    public function getTaxRateCode2(): string
    {
        return $this->taxRateCode2 ? $this->taxRateCode2->code() : '';
    }

    public function getTaxRateCode2Desc(): string
    {
        return $this->taxRateCode2 ? $this->taxRateCode2->desc() : '';
    }

    public function setTaxRatePercent2(string $value): void
    {
        $this->taxRatePercent2 = $value;
    }

    public function getTaxRatePercent2(): string
    {
        return $this->taxRatePercent2;
    }

    public function setTaxableAmount2(string $value): void
    {
        $this->taxableAmount2 = $value;
    }

    public function getTaxableAmount2(): string
    {
        return $this->taxableAmount2;
    }
}