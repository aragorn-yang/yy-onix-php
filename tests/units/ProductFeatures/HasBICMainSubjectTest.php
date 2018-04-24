<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasBICMainSubjectTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<BICMainSubject>UY</BICMainSubject>');
        $this->assertSame('UY', $product->getBICMainSubject());
    }
}