<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasBICVersionTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<BICVersion>2.0</BICVersion>');
        $this->assertSame('2.0', $product->getBICVersion());
    }
}