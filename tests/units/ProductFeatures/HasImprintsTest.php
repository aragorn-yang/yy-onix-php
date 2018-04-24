<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasImprintsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Imprint>
            <ImprintName>Facts on File Publications</ImprintName>
        </Imprint>');
        $this->assertSame('Facts on File Publications', $product->getImprint());
    }
}