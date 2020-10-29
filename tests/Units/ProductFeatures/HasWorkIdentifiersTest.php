<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Composites\WorkIdentifier;
use AragornYang\Onix\Tests\TestCase;

class HasWorkIdentifiersTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<WorkIdentifier></WorkIdentifier>
<WorkIdentifier></WorkIdentifier>');
        $this->assertCount(2, $product->getWorkIdentifiers());
        /** @var WorkIdentifier $workIdentifier */
        $workIdentifier = $product->getWorkIdentifiers()[0];
        $this->assertInstanceOf(WorkIdentifier::class, $workIdentifier);
    }
}