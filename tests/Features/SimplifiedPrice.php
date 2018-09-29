<?php

namespace AragornYang\Onix\Tests\features;

class SimplifiedPrice
{
    public $priceForCountry = 'NoGB&NoROW';
    public $discount = 'NoDiscountInfo';
    public $currency = 'N/A';
    public $amount = 0.0;

    public function toString(): string
    {
        return "$this->priceForCountry-$this->discount-$this->currency-$this->amount;";
    }
}