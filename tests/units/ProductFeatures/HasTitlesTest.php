<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasTitlesTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Title>
            <TitleType>01</TitleType>
            <TitleText textcase="02">British English, A to Zed</TitleText>
        </Title>');
        $this->assertSame('British English, A to Zed', $product->getTitle());
    }
}