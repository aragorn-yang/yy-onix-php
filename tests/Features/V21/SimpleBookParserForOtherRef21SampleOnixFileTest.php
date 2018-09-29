<?php

namespace AragornYang\Onix\Tests\Features\V21;

use AragornYang\Onix\BookParser;
use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\SimpleBookParser;
use AragornYang\Onix\Tests\Features\BookParserForSampleOnixFileTest;

class SimpleBookParserForOtherRef21SampleOnixFileTest extends BookParserForSampleOnixFileTest
{
    use UseV21Handler;

    /** @var BookParser */
    protected static $parser;
    protected static $parsed = false;
    /** @var array|Product[] */
    protected static $products;
    /** @var Product */
    protected $product;

    public function __construct()
    {
        ini_set('memory_limit', '4096M');
        parent::__construct();
    }

    protected function getParser(): BookParser
    {
        return new SimpleBookParser;
    }

    protected function getPath(): string
    {
        return __DIR__ . '/samples/sample.v.2.1.ref.onx';
    }

    /** @test */
    public function fake_test(): void
    {
        $this->assertTrue(true);
    }
}