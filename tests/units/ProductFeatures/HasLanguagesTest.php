<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasLanguagesTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Language>
<LanguageRole>01</LanguageRole>
<LanguageCode>eng</LanguageCode>
</Language>');
        $this->assertSame('eng', $product->getLanguageCode());
    }
}