<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasBASICVersionTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<BASICVersion>XX</BASICVersion>');
        $this->assertSame('XX', $product->getBASICVersion());
    }
}