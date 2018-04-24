<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Composites\SupplyDetail;
use AragornYang\Onix\Tests\TestCase;

class HasSupplyDetailsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <SupplierSAN>1234567</SupplierSAN>
            <AvailabilityCode>IP</AvailabilityCode>
            <Price>
                <PriceTypeCode>01</PriceTypeCode>
                <PriceAmount>35.00</PriceAmount>
            </Price>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame('1234567', $supplyDetail->getSupplierSAN());
        $this->assertSame('IP', $supplyDetail->getAvailabilityCode());
        $price = $supplyDetail->getPrice();
        $this->assertTrue($price->isRrpExcTax());
        $this->assertSame(35.0, $price->getPriceAmount());
    }
}