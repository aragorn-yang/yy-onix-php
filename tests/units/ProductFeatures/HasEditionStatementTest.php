<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasEditionStatementTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<EditionStatement>Reissue</EditionStatement>');
        $this->assertSame('Reissue', $product->getEditionStatement());
    }
}