<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasProductFormFeatureTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<ProductFormFeature><ProductFormFeatureType>30</ProductFormFeatureType></ProductFormFeature>');
        $this->assertCount(1, $product->getProductFormFeatures());
        $productFormFeature = $product->getProductFormFeatures()[0];
        $this->assertSame('30', $productFormFeature->getProductFormFeatureType());
        $this->assertSame('Not FSC or PEFC certified', $productFormFeature->getProductFormFeatureTypeDesc());
    }
}