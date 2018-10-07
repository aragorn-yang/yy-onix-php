<?php

namespace AragornYang\Onix\Tests\Units\Composites;

use AragornYang\Onix\Composites\Price;
use AragornYang\Onix\Composites\SupplyDetail;
use AragornYang\Onix\Tests\TestCase;

class SupplyDetailTest extends TestCase
{
    /** @var SupplyDetail */
    protected $supplyDetail;

    protected function setUp(): void
    {
        parent::setUp();
        $product = $this->getParsedProduct('<SupplyDetail>
            <SupplierRole>01</SupplierRole>
            <SupplierSAN>1234567</SupplierSAN>
            <SupplierName>OUP Kettering</SupplierName>
            <OrderTime>10</OrderTime>
            <AvailabilityCode>IP</AvailabilityCode>
            <ProductAvailability>10</ProductAvailability>
            <ExpectedShipDate>20180601</ExpectedShipDate>
            <PackQuantity>10</PackQuantity>
            <ReturnsCodeType>02</ReturnsCodeType>
            <ReturnsCode>Y</ReturnsCode>
            <SupplyToCountry>US</SupplyToCountry>
            <SupplyToTerritory>ROW</SupplyToTerritory>
            <Stock><OnHand>3</OnHand></Stock>
            <Price></Price>
        </SupplyDetail>');
        $this->supplyDetail = $product->getSupplyDetails()[0];
    }

    /** @test */
    public function it_has_supplier_role(): void
    {
        $this->assertSame('01', $this->supplyDetail->getSupplierRole());
        $this->assertSame('Publisher to retailers', $this->supplyDetail->getSupplierRoleDesc());
    }

    /** @test */
    public function it_has_supplier_san(): void
    {
        $this->assertSame('1234567', $this->supplyDetail->getSupplierSAN());
    }

    /** @test */
    public function it_has_supplier_name(): void
    {

        $this->assertSame('OUP Kettering', $this->supplyDetail->getSupplierName());
    }

    /** @test */
    public function it_has_order_time(): void
    {

        $this->assertSame(10, $this->supplyDetail->getOrderTime());
    }

    /** @test */
    public function it_has_availability_code(): void
    {
        $this->assertSame('IP', $this->supplyDetail->getAvailabilityCode());
        $this->assertSame('Available', $this->supplyDetail->getAvailabilityCodeDesc());
    }

    /** @test */
    public function it_has_product_availability(): void
    {
        $this->assertSame('10', $this->supplyDetail->getProductAvailability());
        $this->assertSame('Not yet available', $this->supplyDetail->getProductAvailabilityDesc());
    }

    /** @test */
    public function it_has_expected_ship_date(): void
    {
        $this->assertSame('20180601', $this->supplyDetail->getExpectedShipDate());
    }

    /** @test */
    public function it_has_pack_quantity(): void
    {
        $this->assertSame(10, $this->supplyDetail->getPackQuantity());
    }

    /** @test */
    public function it_has_returns_code_type(): void
    {
        $this->assertSame('02', $this->supplyDetail->getReturnsCodeType());
        $this->assertSame('BISAC Returnable Indicator code', $this->supplyDetail->getReturnsCodeTypeDesc());
    }

    /** @test */
    public function it_has_returns_code(): void
    {
        $this->assertSame('Y', $this->supplyDetail->getReturnsCode());
    }

    /** @test */
    public function it_has_supplier_to_countries(): void
    {
        $this->assertSame(['US'], $this->supplyDetail->getSupplyToCountries());
    }

    /** @test */
    public function it_has_supplier_territories(): void
    {
        $this->assertSame(['ROW'], $this->supplyDetail->getSupplyToTerritories());
    }

    /** @test */
    public function it_has_price(): void
    {
        $price = $this->supplyDetail->getPrices()[0];
        $this->assertInstanceOf(Price::class, $price);
    }

    /** @test */
    public function it_has_stock_on_hand(): void
    {
        $this->assertSame(3, $this->supplyDetail->getStock()->getOnHand());
    }
}