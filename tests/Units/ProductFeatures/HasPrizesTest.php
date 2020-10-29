<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasPrizesTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Prize><PrizeName>Endorsed by Infertility UK</PrizeName></Prize>');
        $this->assertCount(1, $product->getPrizes());
        $this->assertSame(['Endorsed by Infertility UK'], $product->getPrizeNames());
    }
}