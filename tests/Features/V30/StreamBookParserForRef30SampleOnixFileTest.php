<?php

namespace AragornYang\Onix\Tests\Features\V30;

use AragornYang\Onix\BookParser;
use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\StreamBookParser;
use AragornYang\Onix\Tests\Features\BookParserForSampleOnixFileTest;

class StreamBookParserForRef30SampleOnixFileTest extends BookParserForSampleOnixFileTest
{
    use SampleOnixFile30, UseV30Handler;

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
        return __DIR__ . '/samples/sample.v.3.0.ref.xml';
    }
}