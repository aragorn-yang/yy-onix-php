<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasYearFirstPublishedTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<YearFirstPublished>1990</YearFirstPublished>');
        $this->assertSame('1990', $product->getYearFirstPublished());
    }
}