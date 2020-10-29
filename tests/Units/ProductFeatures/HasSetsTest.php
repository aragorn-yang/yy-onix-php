<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasSetsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Set>
<TitleOfSet>Oxford Reading Tree</TitleOfSet>
<SetPartTitle>Level 8: Fireflies</SetPartTitle>
<SetItemTitle>What\'s Inside Me?</SetItemTitle>
</Set>');
        $this->assertCount(1, $product->getSets());
        $set = $product->getSets()[0];
        $this->assertSame('Oxford Reading Tree', $set->getTitleOfSet());
        $this->assertSame('Level 8: Fireflies', $set->getSetPartTitle());
        $this->assertSame('What\'s Inside Me?', $set->getSetItemTitle());
    }
}