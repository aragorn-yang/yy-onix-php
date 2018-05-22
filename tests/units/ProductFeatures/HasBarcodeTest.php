<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasBarcodeTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Barcode>11</Barcode>');
        $this->assertSame('11', $product->getBarcode());
        $this->assertSame('EAN13+5 on cover 4 (US dollar price encoded)', $product->getBarcodeDesc());
    }
}