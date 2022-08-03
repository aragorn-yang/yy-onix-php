<?php

namespace AragornYang\Onix\Tests\Features\V30;

use AragornYang\Onix\Composites\Price;
use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\Composites\SupplyDetail;
use AragornYang\Onix\Onix;
use AragornYang\Onix\Tests\Features\ProductHandler;
use AragornYang\Onix\Tests\Features\SimplifiedPrice;
use AragornYang\Onix\Tests\Features\SimplifiedProduct;

class V30ProductHandler extends ProductHandler
{
    /** @var array|SimplifiedProduct[] */
    protected static $simplifiedProducts = [];
    protected static $countOfNoSalesRights = 0;
    protected static $discountCodeCounts = [];

    public function handle(Product $product): void
    {
        static::$simplifiedProducts[] = $this->getSimplifiedProduct($product);
    }

    protected function handlePrice(Price $price = null): SimplifiedPrice
    {
        $simplifiedPrice = new SimplifiedPrice;
        if ($price) {
            $simplifiedPrice->discount = '';
            $simplifiedPrice->priceForCountry = implode(',',
                array_merge($price->getCountryCodes(), $price->getTerritories()));
            $simplifiedPrice->currency = $price->getCurrencyCode();
            foreach ($price->getDiscountsCoded() as $discountCoded) {
                $simplifiedPrice->discount .= $discountCoded->getDiscountCodeType() . '~' . $discountCoded->getDiscountCode() . '~~';
            }
            $simplifiedPrice->amount = $price->getPriceAmount();
        }

        return $simplifiedPrice;
    }

    public static function report(): void
    {
        var_dump(count(static::$simplifiedProducts));
        echo "\n countOfNoSalesRights:" . static::$countOfNoSalesRights;


        echo "\n\n";
        echo "\n UnrecognisableElements";
        foreach (Onix::getInstance()->getUnrecognisableElements() as $position => $count) {
            echo "\n $position::$count";
        }

        echo "\n\n";
        echo "\n UnrecognisableCodes";
        foreach (Onix::getInstance()->getUnrecognisableCodes() as $code => $count) {
            echo "\n $code::$count";
        }


        echo "\n\n";
        echo "\n PositionCounts";
        foreach (Onix::getInstance()->getElementPositions() as $position => $count) {
            echo "\n $position::$count";
        }

        echo "\n\n";
        echo "\n Products";
        $fp = fopen('report.csv', 'wb');
        fputcsv($fp, SimplifiedProduct::echoHeader());
        /** @var SimplifiedProduct $sp */
        foreach (static::$simplifiedProducts as $sp) {
            fputcsv($fp, $sp->toArray());
        }

        fclose($fp);

    }

    protected function getThePriceForGB(SupplyDetail $supplyDetail): ?Price
    {
        $prices = $supplyDetail->getPrices();
        foreach ($prices as $price) {
            if ($price->getCurrencyCode() === 'GBP'
                && count($price->getCountryCodes()) <= 0 && count($price->getTerritories()) <= 0) {
                return $price;
            }
            if (count($price->getCountryCodes()) > 0 && in_array('GB', $price->getCountryCodes(), true)) {
                return $price;
            }
        }
        return null;
    }

    protected function getThePriceForROW(SupplyDetail $supplyDetail): ?Price
    {
        $prices = $supplyDetail->getPrices();
        foreach ($prices as $price) {
            if (count($price->getTerritories()) > 0 && in_array('ROW', $price->getTerritories(), true)) {
                return $price;
            }
        }
        return null;
    }

    private function getSimplifiedProduct(Product $product): SimplifiedProduct
    {
        $sp = new SimplifiedProduct;
        $sp->isbn13 = $product->getIsbn13();
        //$salesRights = $product->getSalesRights();
        //if (\count($salesRights) === 0) {
        //    static::$countOfNoSalesRights++;
        //}
        //$sp->countryOfPublication = $product->getCountryOfPublication();
        //$sp->salesRightsInGB = $product->hasSalesRightsIn('GB');
        $supplyDetails = $this->getAvailableSupplyDetails($product);
        foreach ($supplyDetails as $supplyDetail) {
            if ($sp->hasGBPrice) {
                break;
            }
            $availabilityCode = $supplyDetail->getAvailabilityCode();
            $productAvailability = $supplyDetail->getProductAvailability();
            $sp->availabilityCode = $availabilityCode;
            $sp->productAvailability = $productAvailability;
            $sp->orderTime = $supplyDetail->getOrderTime();
            if ($thePrice = $this->getThePriceForGB($supplyDetail)) {
                $sp->thePrice = $this->handlePrice($thePrice);
                $sp->hasGBPrice = true;
                continue;
            }

            if ($thePrice = $this->getThePriceForROW($supplyDetail)) {
                $sp->thePrice = $this->handlePrice($thePrice);
                continue;
            }

            $prices = $supplyDetail->getPrices();
            $priceInfo = '';
            foreach ($prices as $price) {
                $priceInfo .= $this->handlePrice($price)->toString();
            }

            $sp->supplyDetails[] = $availabilityCode . '-' . $productAvailability . '-' . $supplyDetail->getOrderTime() . '-' . $priceInfo;
        }

        return $sp;
    }

    /**
     * @param  Product  $product
     * @return SupplyDetail[]
     */
    private function getAvailableSupplyDetails(Product $product): array
    {
        $return = [];
        $supplyDetails = $product->getSupplyDetails();
        /** @var SupplyDetail $supplyDetail */
        foreach ($supplyDetails as $supplyDetail) {
            $availabilityCode = $supplyDetail->getAvailabilityCode();
            $productAvailability = $supplyDetail->getProductAvailability();
            if (!($availabilityCode === 'IP'
                    || $availabilityCode === 'MD'
                    || $availabilityCode === 'TO')
                &&
                !($productAvailability === '20'
                    || $productAvailability === '21'
                    || $productAvailability === '22'
                    || $productAvailability === '23')) {
                continue;
            }
            if (count($supplyDetail->getPrices()) === 0) {
                continue;
            }
            $return[] = $supplyDetail;
        }
        return $return;
    }

}