<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasIllustrationsNoteTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<IllustrationsNote>numerous line drawings</IllustrationsNote>');
        $this->assertSame('numerous line drawings', $product->getIllustrationsNote());
    }
}