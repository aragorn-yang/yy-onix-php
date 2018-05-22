<?php

namespace AragornYang\Onix\Tests\Units\Composites;

use AragornYang\Onix\Composites\Price;
use AragornYang\Onix\Composites\SupplyDetail;
use AragornYang\Onix\Tests\TestCase;

class SupplyDetailTest extends TestCase
{
    /** @test */
    public function it_has_supplier_san(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <SupplierSAN>1234567</SupplierSAN>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame('1234567', $supplyDetail->getSupplierSAN());
    }

    /** @test */
    public function it_has_supplier_name(): void
    {

        $product = $this->getParsedProduct('<SupplyDetail>
            <SupplierName>OUP Kettering</SupplierName>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame('OUP Kettering', $supplyDetail->getSupplierName());
    }

    /** @test */
    public function it_has_order_time(): void
    {

        $product = $this->getParsedProduct('<SupplyDetail>       
            <OrderTime>10</OrderTime>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame(10, $supplyDetail->getOrderTime());
    }

    /** @test */
    public function it_has_availability_code(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <AvailabilityCode>IP</AvailabilityCode>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame('IP', $supplyDetail->getAvailabilityCode());
        $this->assertSame('Available', $supplyDetail->getAvailabilityCodeDesc());
    }

    /** @test */
    public function it_has_product_availability(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <ProductAvailability>10</ProductAvailability>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame('10', $supplyDetail->getProductAvailability());
        $this->assertSame('Not yet available', $supplyDetail->getProductAvailabilityDesc());
    }

    /** @test */
    public function it_has_price(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
            <Price>
            </Price>
        </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $price = $supplyDetail->getPrice();
        $this->assertInstanceOf(Price::class, $price);
    }

    /** @test */
    public function it_has_expected_ship_date(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
<ExpectedShipDate>20180601</ExpectedShipDate>
</SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame('20180601', $supplyDetail->getExpectedShipDate());
        $this->assertSame(0, $supplyDetail->getOrderTime());
    }

    /** @test */
    public function it_has_pack_quantity(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
      <PackQuantity>10</PackQuantity>
    </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame(10, $supplyDetail->getPackQuantity());
    }

    /** @test */
    public function it_has_returns_code(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail>
      <ReturnsCodeType>02</ReturnsCodeType>
      <ReturnsCode>Y</ReturnsCode>
    </SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertSame('02', $supplyDetail->getReturnsCodeType());
        $this->assertSame('BISAC Returnable Indicator code', $supplyDetail->getReturnsCodeTypeDesc());
        $this->assertSame('Y', $supplyDetail->getReturnsCode());
    }
}