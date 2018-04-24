<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasCityOfPublicationTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<CityOfPublication>Oxford</CityOfPublication>');
        $this->assertSame('Oxford', $product->getCityOfPublication());
    }
}