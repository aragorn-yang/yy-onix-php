<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasPublishersTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Publisher>
            <PublishingRole>01</PublishingRole>
            <PublisherName>Facts on File Inc</PublisherName>
        </Publisher>');
        $this->assertSame('Facts on File Inc', $product->getPublisher());
    }
}