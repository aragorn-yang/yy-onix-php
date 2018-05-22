<?php

namespace AragornYang\Onix\Tests\Units\Composites;

use AragornYang\Onix\Composites\SupplyDetail;
use AragornYang\Onix\Tests\TestCase;

class PriceTest extends TestCase
{
    /** @test */
    public function it_has_price_effective_from(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <Price>
                <PriceEffectiveFrom>20180520</PriceEffectiveFrom>
            </Price>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $price = $supplyDetail->getPrice();
        $this->assertSame('20180520', $price->getPriceEffectiveFrom());
    }

    /** @test */
    public function it_has_price_type_code(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <Price>
                <PriceTypeCode>01</PriceTypeCode>
            </Price>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $price = $supplyDetail->getPrice();
        $this->assertTrue($price->isRrpExcTax());
    }

    /** @test */
    public function it_has_price_amount(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <Price>
                <PriceAmount>52.00</PriceAmount>
            </Price>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $price = $supplyDetail->getPrice();
        $this->assertSame(52.0, $price->getPriceAmount());
    }
    /** @test */
    public function it_has_currency_code(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <Price>
                <CurrencyCode>GBP</CurrencyCode>
            </Price>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $price = $supplyDetail->getPrice();
        $this->assertSame('GBP', $price->getCurrencyCode());
    }

    /** @test */
    public function it_has_discount_coded(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <Price>
                <DiscountCoded>
                    <DiscountCodeType>01</DiscountCodeType>
                    <DiscountCode>AOXUPAJ</DiscountCode>
                </DiscountCoded>
            </Price>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $price = $supplyDetail->getPrice();
        $this->assertSame('AOXUPAJ', $price->getDiscountCoded()->getDiscountCode());
        $this->assertSame('OXUP', $price->getDiscountCoded()->getDiscountCodePublisherPart());
        $this->assertSame('AJ', $price->getDiscountCoded()->getDiscountCodeDiscountPart());
        $this->assertSame('01', $price->getDiscountCoded()->getDiscountCodeType());
        $this->assertSame('BIC discount group code', $price->getDiscountCoded()->getDiscountCodeTypeDesc());
    }

    /** @test */
    public function it_has_tax_rate_code1(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <Price>
                <TaxRateCode1>Z</TaxRateCode1>
            </Price>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $price = $supplyDetail->getPrice();
        $this->assertSame('Z', $price->getTaxRateCode1());
    }

    /** @test */
    public function it_has_taxable_price(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
<Price>
<TaxableAmount1>26.25</TaxableAmount1>
</Price>
</SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $price = $supplyDetail->getPrice();
        $this->assertSame(26.25, $price->getTaxableAmount1());
    }
}