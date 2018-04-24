<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasRecordReferenceTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<RecordReference>1234567890</RecordReference>');
        $this->assertSame('1234567890', $product->getRecordReference());
    }
}