<?php

namespace AragornYang\Onix\Tests\Features\V30;

use AragornYang\Onix\BookParser;
use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\StreamBookParser;
use AragornYang\Onix\Tests\Features\BookParserForSampleOnixFileTest;
use AragornYang\Onix\Tests\features\V30\SampleOnixFile30;
use AragornYang\Onix\Tests\features\V30\UseV30Handler;

class StreamBookParserForTag30SampleOnixFileTest extends BookParserForSampleOnixFileTest
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
        return __DIR__ . '/samples/sample.v.3.0.tag.xml';
    }
}