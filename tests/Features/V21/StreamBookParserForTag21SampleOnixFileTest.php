<?php

namespace AragornYang\Onix\Tests\Features\V21;

use AragornYang\Onix\BookParser;
use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\StreamBookParser;
use AragornYang\Onix\Tests\Features\BookParserForSampleOnixFileTest;

class StreamBookParserForTag21SampleOnixFileTest extends BookParserForSampleOnixFileTest
{
    use SampleOnixFile21, UseV21Handler;

    /** @var BookParser */
    protected static $parser;
    protected static $parsed = false;
    /** @var array|Product[] */
    protected static $products;
    /** @var Product */
    protected $product;

    protected function getParser(): BookParser
    {
        return new StreamBookParser;
    }

    protected function getPath(): string
    {
        return __DIR__ . '/samples/sample.v.2.1.tag.onx';
    }
}