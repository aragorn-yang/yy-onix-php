<?php

namespace AragornYang\Onix\Tests\Features;

use AragornYang\Onix\BookParser;
use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\Tests\TestCase;

abstract class BookParserForSampleOnixFileTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        if (!static::$parsed) {
            static::$parser = $this->getParser();
            static::$parser->setProductHandler(function (Product $product) {
                static::$products[] = $product;
                $this->getHandler()->handle($product);
            });
            static::$parser->parseFile($this->getPath());
            static::$parsed = true;
            //ProductHandler::report();
        }
        /** @var Product $product */
        $this->product = static::$products[0];
    }

    abstract protected function getParser(): BookParser;

    abstract protected function getHandler(): ProductHandler;

    abstract protected function getPath(): string;
}