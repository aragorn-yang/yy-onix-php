<?php

namespace AragornYang\Onix\Tests\Units\Composites;

use AragornYang\Onix\Composites\Product21;
use AragornYang\Onix\Composites\ProductIdentifier;
use AragornYang\Onix\Composites\V30\Product30;
use AragornYang\Onix\Tests\TestCase;

class CompositeTest extends TestCase
{
    /** @test */
    public function it_has_proper_position(): void
    {
        $this->assertSame('Product', (new Product21)->getCompositePosition());
        $this->assertSame('Product', (new Product30)->getCompositePosition());
        $this->assertSame('ProductIdentifier', (new ProductIdentifier)->getCompositePosition());
    }
}