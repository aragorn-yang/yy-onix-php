<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasSaleRightsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<SalesRights></SalesRights><SalesRights></SalesRights>');
        $this->assertCount(2, $product->getSalesRights());
    }
}