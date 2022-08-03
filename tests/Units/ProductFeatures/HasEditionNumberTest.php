<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasEditionNumberTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<EditionNumber>3</EditionNumber>');
        $this->assertSame('3', $product->getEditionNumber());
    }
}