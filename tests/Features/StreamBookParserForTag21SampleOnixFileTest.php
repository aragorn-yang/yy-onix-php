<?php

namespace AragornYang\Onix\Tests\Features;

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\StreamBookParser;

class StreamBookParserForTag21SampleOnixFileTest extends BookParserForTag21SampleOnixFileTest
{
    public function __construct()
    {
        parent::__construct();
        if (!static::$products) {
            static::$parser = new StreamBookParser;
            static::$contents = file_get_contents(__DIR__ . '/../samples/sample.v.2.1.tag.onx');
            static::$parser->setProductHandler(function (Product $product) {
                static::$products[] = $product;
            });
            static::$parser->parseString(static::$contents);
        }
        /** @var Product $product */
        $this->product = static::$products[0];
    }
}