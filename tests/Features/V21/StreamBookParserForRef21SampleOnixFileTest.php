<?php

namespace AragornYang\Onix\Tests\Features\V21;

use AragornYang\Onix\BookParser;
use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\StreamBookParser;
use AragornYang\Onix\Tests\Features\BookParserForSampleOnixFileTest;

class StreamBookParserForRef21SampleOnixFileTest extends BookParserForSampleOnixFileTest
{
    use Ref21SampleOnixFile, UseV21Handler;

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
        return __DIR__ . '/samples/sample.v.2.1.ref.onx';
    }
}