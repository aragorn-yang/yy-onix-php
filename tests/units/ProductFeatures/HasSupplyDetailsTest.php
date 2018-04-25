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

    /** @test */
    public function product_has_this_feature2(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <SupplierName>OUP Kettering</SupplierName>
            <AvailabilityCode>MD</AvailabilityCode>
            <OrderTime>10</OrderTime>
            <Price>
                <PriceTypeCode>01</PriceTypeCode>
                <DiscountCoded>
                    <DiscountCodeType>01</DiscountCodeType>
                    <DiscountCode>AOXUPAJ</DiscountCode>
                </DiscountCoded>
                <PriceAmount>52.00</PriceAmount>
                <CurrencyCode>GBP</CurrencyCode>
                <TaxRateCode1>Z</TaxRateCode1>
            </Price>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame('OUP Kettering', $supplyDetail->getSupplierName());
        $this->assertSame('MD', $supplyDetail->getAvailabilityCode());
        $this->assertSame(10, $supplyDetail->getOrderTime());
        $price = $supplyDetail->getPrice();
        $this->assertTrue($price->isRrpExcTax());
        $this->assertSame(52.0, $price->getPriceAmount());
        $this->assertSame('GBP', $price->getCurrencyCode());
        $this->assertSame('Z', $price->getTaxRateCode1());
        $this->assertSame('AOXUPAJ', $price->getDiscountCoded()->getDiscountCode());
        $this->assertSame('OXUP', $price->getDiscountCoded()->getDiscountCodePublisherPart());
        $this->assertSame('AJ', $price->getDiscountCoded()->getDiscountCodeDiscountPart());
        $this->assertSame('01', $price->getDiscountCoded()->getDiscountCodeType());
        $this->assertSame('BIC discount group code', $price->getDiscountCoded()->getDiscountCodeTypeDesc());
    }

    /** @test */
    public function product_has_taxable_price(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
<SupplierName>OUP Kettering</SupplierName>
<AvailabilityCode>IP</AvailabilityCode>
<Price>
<PriceTypeCode>01</PriceTypeCode>
<DiscountCoded>
<DiscountCodeType>01</DiscountCodeType>
<DiscountCode>AOXUPSA</DiscountCode>
</DiscountCoded>
<PriceAmount>26.25</PriceAmount>
<CurrencyCode>GBP</CurrencyCode>
<TaxRateCode1>S</TaxRateCode1>
<TaxableAmount1>26.25</TaxableAmount1>
</Price>
</SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame('OUP Kettering', $supplyDetail->getSupplierName());
        $this->assertSame('IP', $supplyDetail->getAvailabilityCode());
        $this->assertSame(0, $supplyDetail->getOrderTime());
        $price = $supplyDetail->getPrice();
        $this->assertTrue($price->isRrpExcTax());
        $this->assertSame(26.25, $price->getPriceAmount());
        $this->assertSame('GBP', $price->getCurrencyCode());
        $this->assertSame('S', $price->getTaxRateCode1());
        $this->assertSame(26.25, $price->getTaxableAmount1());
        $this->assertSame('AOXUPSA', $price->getDiscountCoded()->getDiscountCode());
        $this->assertSame('OXUP', $price->getDiscountCoded()->getDiscountCodePublisherPart());
        $this->assertSame('SA', $price->getDiscountCoded()->getDiscountCodeDiscountPart());
        $this->assertSame('01', $price->getDiscountCoded()->getDiscountCodeType());
        $this->assertSame('BIC discount group code', $price->getDiscountCoded()->getDiscountCodeTypeDesc());
    }
    /** @test */
    public function product_has_expected_ship_date(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
<SupplierName>OUP Kettering</SupplierName>
<AvailabilityCode>RP</AvailabilityCode>
<ExpectedShipDate>20180601</ExpectedShipDate>
</SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame('OUP Kettering', $supplyDetail->getSupplierName());
        $this->assertSame('RP', $supplyDetail->getAvailabilityCode());
        $this->assertSame('20180601', $supplyDetail->getExpectedShipDate());
        $this->assertSame(0, $supplyDetail->getOrderTime());
    }
}