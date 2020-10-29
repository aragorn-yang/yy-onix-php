<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasRecordSourceTypeTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<RecordSourceType>01</RecordSourceType>');
        $this->assertSame('01', $product->getRecordSourceType());
        $this->assertSame('Publisher', $product->getRecordSourceTypeDesc());
    }
}