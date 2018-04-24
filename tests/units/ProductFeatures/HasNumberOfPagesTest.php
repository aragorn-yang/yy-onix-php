<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasNumberOfPagesTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<NumberOfPages>493</NumberOfPages>');
        $this->assertSame(493, $product->getNumberOfPages());
    }
}