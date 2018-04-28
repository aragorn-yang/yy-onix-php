<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList58PriceTypeCode;
use AragornYang\Onix\CodeLists\CodeList62TaxRateCoded;
use AragornYang\Onix\CodeLists\CodeList96CurrencyCodeISO4217;

class Price extends Composite
{
    /** @var CodeInList */
    protected $priceTypeCode;
    /** @var float */
    protected $priceAmount = 0.0;
    /** @var float */
    protected $taxableAmount1 = 0.0;
    /** @var CodeInList */
    protected $currencyCode;
    /** @var CodeInList */
    protected $taxRateCode1;
    /** @var DiscountCoded */
    protected $discountCoded;

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

    public function getDiscountCoded(): DiscountCoded
    {
        return $this->discountCoded;
    }

    public function setDiscountCoded(\SimpleXMLElement $xml): void
    {
        $this->discountCoded = DiscountCoded::buildFromXml($xml, $this);
    }

    public function getTaxableAmount1(): float
    {
        return $this->taxableAmount1;
    }

    public function setTaxableAmount1(string $taxableAmount1): void
    {
        $this->taxableAmount1 = (float)$taxableAmount1;
    }
}