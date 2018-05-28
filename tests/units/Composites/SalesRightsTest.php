<?php

namespace AragornYang\Onix\Tests\units\Composites;

use AragornYang\Onix\Tests\TestCase;

class SalesRightsTest extends TestCase
{
    /** @test */
    public function it_has_sales_rights_type(): void
    {
        $product = $this->getParsedProduct('<SalesRights>
            <SalesRightsType>01</SalesRightsType>
        </SalesRights>');
        $this->assertSame('01', $product->getSalesRightsWithTypeOf('01')->getSalesRightsType());
        $this->assertSame('For sale with exclusive rights in the specified countries or territories',
            $product->getSalesRightsWithTypeOf('01')->getSalesRightsTypeDesc());
    }

    /** @test */
    public function it_has_rights_country(): void
    {
        $product = $this->getParsedProduct('<SalesRights>
            <SalesRightsType>01</SalesRightsType>
            <RightsCountry>GB</RightsCountry>
            <RightsCountry>US</RightsCountry>
        </SalesRights>');
        $this->assertSame(['GB', 'US'], $product->getSalesRightsWithTypeOf('01')->getRightsCountries());
    }

    /** @test */
    public function it_has_rights_territory(): void
    {
        $product = $this->getParsedProduct('<SalesRights>
            <SalesRightsType>01</SalesRightsType>
            <RightsTerritory>ROW</RightsTerritory>
        </SalesRights>');
        $this->assertSame(['ROW'], $product->getSalesRightsWithTypeOf('01')->getRightsTerritories());
    }

    /** @test */
    public function it_includes_country(): void
    {
        $product = $this->getParsedProduct('<SalesRights>
            <SalesRightsType>01</SalesRightsType>
            <RightsCountry>GB</RightsCountry>
            <RightsCountry>US</RightsCountry>
        </SalesRights>');
        $this->assertTrue($product->hasSalesRightsIn('GB'));
        $this->assertTrue($product->hasSalesRightsIn('US'));
    }

    /** @test */
    public function it_includes_rest_of_the_world(): void
    {
        $product = $this->getParsedProduct('<SalesRights>
            <SalesRightsType>01</SalesRightsType>
            <RightsCountry>US</RightsCountry>
            <RightsTerritory>ROW</RightsTerritory>
        </SalesRights>');
        $this->assertTrue($product->hasSalesRightsIn('GB'));
        $this->assertTrue($product->hasSalesRightsIn('US'));
    }

    /** @test */
    public function it_includes_world(): void
    {
        $product = $this->getParsedProduct('<SalesRights>
            <SalesRightsType>01</SalesRightsType>
            <RightsTerritory>WORLD</RightsTerritory>
        </SalesRights>');
        $this->assertTrue($product->hasSalesRightsIn('GB'));
        $this->assertTrue($product->hasSalesRightsIn('US'));
    }

    /** @test */
    public function it_excludes_country(): void
    {
        $product2 = $this->getParsedProduct('<SalesRights>
            <SalesRightsType>03</SalesRightsType>
            <RightsCountry>US</RightsCountry>
        </SalesRights>');
        $this->assertNull($product2->hasSalesRightsIn('GB'));
        $this->assertFalse($product2->hasSalesRightsIn('US'));
    }
}