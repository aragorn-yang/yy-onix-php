<?php

namespace AragornYang\Onix\Tests\Units\Composites;

use AragornYang\Onix\Composites\Price;
use AragornYang\Onix\Composites\SupplyDetail;
use AragornYang\Onix\Tests\TestCase;

class PriceTest extends TestCase
{
    /** @var Price */
    protected $price;

    protected function setUp(): void
    {
        parent::setUp();

        $product = $this->getParsedProduct('<SupplyDetail>
            <Price>
                <PriceTypeCode>01</PriceTypeCode>
                <PriceTypeDescription>Recommended Retail Price</PriceTypeDescription>
                <DiscountCoded>
                    <DiscountCodeType>01</DiscountCodeType>
                    <DiscountCodeTypeName>BIC discount group code</DiscountCodeTypeName>
                    <DiscountCode>ADGNY2</DiscountCode>
                </DiscountCoded>
                <DiscountCoded>
                    <DiscountCodeType>02</DiscountCodeType>
                    <DiscountCodeTypeName>Product discount group</DiscountCodeTypeName>
                    <DiscountCode>DGNY2</DiscountCode>
                </DiscountCoded>
                <PriceStatus>02</PriceStatus>
                <PriceAmount>52.00</PriceAmount>
                <CurrencyCode>GBP</CurrencyCode>
                <TaxRateCode1>Z</TaxRateCode1>
                <TaxRatePercent1>0</TaxRatePercent1>
                <TaxAmount1>0.00</TaxAmount1>
                <TaxableAmount1>26.25</TaxableAmount1>
                <CountryCode>US</CountryCode>
                <Territory>ROW</Territory>
                <PriceEffectiveFrom>20180520</PriceEffectiveFrom>
            </Price>
        </SupplyDetail>');
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->price = $supplyDetail->getPrices()[0];
    }

    /** @test */
    public function it_has_country_code(): void
    {
        $this->assertSame(['US'], $this->price->getCountryCodes());
    }

    /** @test */
    public function it_has_territory(): void
    {
        $this->assertSame(['ROW'], $this->price->getTerritories());
    }

    /** @test */
    public function it_has_price_type_code(): void
    {
        $this->assertSame('01', $this->price->getPriceTypeCode());
        $this->assertTrue($this->price->isRrpExcTax());
    }

    /** @test */
    public function it_has_price_type_description(): void
    {
        $this->assertSame('Recommended Retail Price', $this->price->getPriceTypeDescription());
    }

    /** @test */
    public function it_has_price_status(): void
    {
        $this->assertSame('02', $this->price->getPriceStatus());
        $this->assertSame('Firm', $this->price->getPriceStatusDesc());
    }

    /** @test */
    public function it_has_price_amount(): void
    {
        $this->assertSame(52.0, $this->price->getPriceAmount());
    }

    /** @test */
    public function it_has_currency_code(): void
    {
        $this->assertSame('GBP', $this->price->getCurrencyCode());
    }

    /** @test */
    public function it_has_discount_coded(): void
    {
        $discountsCoded = $this->price->getDiscountsCoded();
        $this->assertCount(2, $discountsCoded);
        $discountCoded = $discountsCoded[0];
        $this->assertSame('ADGNY2', $discountCoded->getDiscountCode());
        $this->assertSame('DGNY', $discountCoded->getDiscountCodePublisherPart());
        $this->assertSame('2', $discountCoded->getDiscountCodeDiscountPart());
        $this->assertSame('01', $discountCoded->getDiscountCodeType());
        $this->assertSame('BIC discount group code', $discountCoded->getDiscountCodeTypeDesc());
    }

    /** @test */
    public function it_has_tax_rate_code1(): void
    {
        $this->assertSame('Z', $this->price->getTaxRateCode1());
    }

    /** @test */
    public function it_has_taxable_amount_1(): void
    {
        $this->assertSame(26.25, $this->price->getTaxableAmount1());
    }

    /** @test */
    public function it_has_tax_rate_percent_1(): void
    {
        $this->assertSame(0.0, $this->price->getTaxRatePercent1());
    }

    /** @test */
    public function it_has_tax_amount_1(): void
    {
        $this->assertSame(0.0, $this->price->getTaxAmount1());
    }

    /** @test */
    public function it_has_price_effective_from(): void
    {
        $this->assertSame('20180520', $this->price->getPriceEffectiveFrom());
    }
}