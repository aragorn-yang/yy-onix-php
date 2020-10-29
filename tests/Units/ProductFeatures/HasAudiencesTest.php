<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Composites\Audience;
use AragornYang\Onix\Tests\TestCase;

class HasAudiencesTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Audience></Audience><Audience></Audience>');
        $this->assertCount(2, $product->getAudiences());
        $this->assertInstanceOf(Audience::class, $product->getAudiences()[0]);
    }
}