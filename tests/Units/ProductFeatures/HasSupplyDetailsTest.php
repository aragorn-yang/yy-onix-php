<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Composites\SupplyDetail;
use AragornYang\Onix\Tests\TestCase;

class HasSupplyDetailsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<SupplyDetail></SupplyDetail>');
        $this->assertCount(1, $product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $product->getSupplyDetails()[0];
        $this->assertInstanceOf(SupplyDetail::class, $supplyDetail);
    }
}