<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList58PriceType;

class Price extends Composite
{
    /** @var CodeInList */
    protected $priceTypeCode;
    /** @var float */
    protected $priceAmount = 0.0;

    public const TYPE_OF_RRP_EXC_TAX = '01';

    public const TYPE_OF_RRP_INC_TAX = '02';

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
        return $this->priceTypeCode ? $this->priceTypeCode->getCode() : '';
    }

    public function getPriceTypeCodeDesc(): string
    {
        return $this->priceTypeCode ? $this->priceTypeCode->getDesc() : '';
    }

    public function setPriceTypeCode(string $code): void
    {
        $this->priceTypeCode = new CodeInList(CodeList58PriceType::class, $code);
    }

    public function getPriceAmount(): float
    {
        return $this->priceAmount;
    }

    public function setPriceAmount(string $priceAmount): void
    {
        $this->priceAmount = (float)$priceAmount;
    }
}