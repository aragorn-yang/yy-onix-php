<?php

namespace AragornYang\Onix\Tests\Units\Composites;

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\Composites\ProductIdentifier;
use AragornYang\Onix\Tests\TestCase;

class CompositeTest extends TestCase
{
    /** @test */
    public function it_has_proper_position(): void
    {
        $this->assertSame('Product', (new Product)->getCompositePosition());
        $this->assertSame('ProductIdentifier', (new ProductIdentifier)->getCompositePosition());
    }
}