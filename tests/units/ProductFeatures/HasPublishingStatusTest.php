<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasPublishingStatusTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<PublishingStatus>02</PublishingStatus>');
        $this->assertSame('02', $product->getPublishingStatus());
        $this->assertSame('Forthcoming', $product->getPublishingStatusDesc());
    }
}