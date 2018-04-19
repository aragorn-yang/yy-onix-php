<?php

namespace AragornYang\Onix\Composites;

class Price extends Composite
{
    /** @var string */
    protected $priceTypeCode = '';
    /** @var float */
    protected $priceAmount = 0.0;

    public function isRrpExcTax(): bool
    {
        return $this->priceTypeCode === '01';
    }

    public function isRrpIncTax(): bool
    {
        return $this->priceTypeCode === '02';
    }

    public function getPriceTypeCode(): string
    {
        return $this->priceTypeCode;
    }

    public function setPriceTypeCode(string $priceTypeCode): void
    {
        $this->priceTypeCode = $priceTypeCode;
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