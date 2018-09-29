<?php

namespace AragornYang\Onix\Tests\features;

class SimplifiedProduct
{
    public $isbn13 = '';
    public $countryOfPublication = '';
    public $salesRightsInGB;
    public $supplyDetails = [];
    public $hasGBPrice = false;
    public $availabilityCode = '';
    public $productAvailability = '';
    public $orderTime = 0;
    /** @var SimplifiedPrice */
    public $thePrice;

    public static function echoHeader(): array
    {
        return [
            'ISBN13',
            'countryOfPublication',
            'salesRightsInGB',
            'hasGBPrice',
            'availabilityCode',
            'productAvailability',
            'orderTime',
            'MainPriceInfo',
            'OtherPriceInfo'
        ];
    }

    public function toArray(): array
    {
        return [
            $this->isbn13,
            $this->countryOfPublication,
            $this->salesRightsInGB,
            $this->hasGBPrice,
            $this->availabilityCode,
            $this->productAvailability,
            $this->orderTime,
            $this->thePrice ? $this->thePrice->toString() : '',
            implode(';', $this->supplyDetails)
        ];
    }
}