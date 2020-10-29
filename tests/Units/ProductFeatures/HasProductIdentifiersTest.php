<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasProductIdentifiersTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<ProductIdentifier>
            <ProductIDType>02</ProductIDType>
            <IDValue>0816016356</IDValue>
        </ProductIdentifier>
        <ProductIdentifier>
            <ProductIDType>15</ProductIDType>
            <IDValue>9780816016358</IDValue>
        </ProductIdentifier>');
        $this->assertSame('0816016356', $product->getIsbn10());
        $this->assertSame('9780816016358', $product->getIsbn13());
    }
}