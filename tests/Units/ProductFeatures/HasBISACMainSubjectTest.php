<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasBISACMainSubjectTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<BISACMainSubject>REF008000</BISACMainSubject>');
        $this->assertSame('REF008000', $product->getBISACMainSubject());
    }
}