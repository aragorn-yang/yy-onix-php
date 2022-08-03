<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasEditionTypeCodeTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<EditionTypeCode>REV</EditionTypeCode>');
        $this->assertSame('REV', $product->getEditionTypeCode());
        $this->assertSame('Revised edition', $product->getEditionTypeCodeDesc());
    }
}