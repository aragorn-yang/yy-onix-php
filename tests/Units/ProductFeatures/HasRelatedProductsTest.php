<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasRelatedProductsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<RelatedProduct>
<RelationCode>06</RelationCode>
<ProductIdentifier>
<ProductIDType>03</ProductIDType>
<IDValue>9780193405721</IDValue></ProductIdentifier>
<ProductForm>BC</ProductForm>
</RelatedProduct>
<RelatedProduct>
<RelationCode>06</RelationCode>
<ProductIdentifier>
<ProductIDType>03</ProductIDType>
<IDValue>9780193407299</IDValue></ProductIdentifier>
<ProductForm>BC</ProductForm>
</RelatedProduct>');
        $this->assertCount(2, $product->getRelatedProducts());
        $this->assertSame(['9780193405721', '9780193407299'], $product->getRelatedProductISBN13s());
    }
}