<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasPublicationDateTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<PublicationDate>1987</PublicationDate>');
        $this->assertSame('1987', $product->getPublicationDate());

        $product = $this->getParsedProduct('<PublicationDate>19900222</PublicationDate>');
        $this->assertSame('19900222', $product->getPublicationDate());
    }
}