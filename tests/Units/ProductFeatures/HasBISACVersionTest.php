<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasBISACVersionTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<BISACVersion>XX</BISACVersion>');
        $this->assertSame('XX', $product->getBISACVersion());
    }
}