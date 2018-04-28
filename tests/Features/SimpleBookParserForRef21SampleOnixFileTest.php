<?php

namespace AragornYang\Onix\Tests\Features;

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\SimpleBookParser;

class SimpleBookParserForRef21SampleOnixFileTest extends BookParserForRef21SampleOnixFileTest
{
    public function __construct()
    {
        parent::__construct();
        if (!static::$products) {
            static::$parser = new SimpleBookParser;
            static::$contents = file_get_contents(__DIR__ . '/../samples/sample.v.2.1.ref.onx');
            static::$parser->setProductHandler(function (Product $product) {
                static::$products[] = $product;
            });
            static::$parser->parseString(static::$contents);
        }
        /** @var Product $product */
        $this->product = static::$products[0];
    }
}