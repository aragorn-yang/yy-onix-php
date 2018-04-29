<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasSaleRightsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<SalesRights>
            <SalesRightsType>01</SalesRightsType>
            <RightsCountry>GB</RightsCountry>
            <RightsCountry>US</RightsCountry>
            <RightsCountry>IE</RightsCountry>
            <RightsCountry>CA</RightsCountry>
            <RightsCountry>AU</RightsCountry>
            <RightsCountry>NZ</RightsCountry>
            <RightsCountry>ZA</RightsCountry>
            <RightsTerritory>ROW</RightsTerritory>
        </SalesRights>');
        $this->assertSame(['ROW'], $product->getSalesRightsWithTypeOf('01')->getRightsTerritory());
        $this->assertCount(7, $product->getSalesRightsWithTypeOf('01')->getRightsCountries());
        $this->assertTrue($product->hasSalesRightsIn('GB'));
        $this->assertTrue($product->hasSalesRightsIn('US'));
    }
    /** @test */
    public function product_can_determine_sales_rights_for_country(): void
    {
        $product = $this->getParsedProduct('<SalesRights>
            <SalesRightsType>01</SalesRightsType>
            <RightsCountry>GB</RightsCountry>
            <RightsCountry>US</RightsCountry>
            <RightsTerritory>ROW</RightsTerritory>
        </SalesRights>');
        $this->assertTrue($product->hasSalesRightsIn('GB'));
        $this->assertTrue($product->hasSalesRightsIn('US'));

        $product2 = $this->getParsedProduct('<SalesRights>
            <SalesRightsType>03</SalesRightsType>
            <RightsCountry>US</RightsCountry>
        </SalesRights>');
        $this->assertNull($product2->hasSalesRightsIn('GB'));
        $this->assertFalse($product2->hasSalesRightsIn('US'));
    }
}