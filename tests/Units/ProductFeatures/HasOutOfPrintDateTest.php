<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasOutOfPrintDateTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<OutOfPrintDate>20000614</OutOfPrintDate>');
        $this->assertSame('20000614', $product->getOutOfPrintDate());
    }
}