<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasCountryOfPublicationTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<CountryOfPublication>GB</CountryOfPublication>');
        $this->assertSame('GB', $product->getCountryOfPublication());
        $this->assertSame('United Kingdom', $product->getCountryOfPublicationDesc());
    }
}