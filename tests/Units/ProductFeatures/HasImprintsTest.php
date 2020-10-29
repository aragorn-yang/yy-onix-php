<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasImprintsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Imprint>
            <NameCodeType>01</NameCodeType>
            <NameCodeTypeName>OXIMPRINTS</NameCodeTypeName>
            <NameCodeValue>CP</NameCodeValue>
            <ImprintName>Clarendon Press</ImprintName>
        </Imprint>');
        $this->assertSame('Clarendon Press', $product->getImprint());
    }
}