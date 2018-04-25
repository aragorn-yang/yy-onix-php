<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasExpectedShipDateTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<ExpectedShipDate>20180313</ExpectedShipDate>');
        $this->assertSame('20180313', $product->getExpectedShipDate());
    }
}