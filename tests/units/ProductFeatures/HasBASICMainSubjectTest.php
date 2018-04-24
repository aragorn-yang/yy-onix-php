<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasBASICMainSubjectTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<BASICMainSubject>REF008000</BASICMainSubject>');
        $this->assertSame('REF008000', $product->getBASICMainSubject());
    }
}