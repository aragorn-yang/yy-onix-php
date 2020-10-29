<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasMediaFilesTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<MediaFile>
            <MediaFileTypeCode>04</MediaFileTypeCode>
            <MediaFileFormatCode>03</MediaFileFormatCode>
            <MediaFileLinkTypeCode>01</MediaFileLinkTypeCode>
            <MediaFileLink>
                http://onix.example/example.jpg</MediaFileLink>
        </MediaFile>');
        $this->assertSame('http://onix.example/example.jpg', $product->getFrontCoverLink());
    }
}