<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasAudienceCodeTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<AudienceCode>01</AudienceCode>');
        $this->assertSame('01', $product->getAudienceCode());
        $this->assertSame('General/trade', $product->getAudienceCodeDesc());
    }
}