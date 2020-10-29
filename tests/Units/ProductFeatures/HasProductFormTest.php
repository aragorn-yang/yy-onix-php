<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasProductFormTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<ProductForm>BB</ProductForm>');
        $this->assertSame('BB', $product->getProductForm());
        $this->assertSame('Hardback', $product->getProductFormDesc());
    }
}