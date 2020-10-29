<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasProductFormDetailTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<ProductFormDetail>B102</ProductFormDetail>');
        $this->assertSame('B102', $product->getProductFormDetail());
        $this->assertSame('Trade paperback (US)', $product->getProductFormDetailDesc());
    }
}