<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasProductFormDescriptionTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<ProductFormDescription>Book &amp; CD</ProductFormDescription>');
        $this->assertSame('Book & CD', $product->getProductFormDescription());
    }
}