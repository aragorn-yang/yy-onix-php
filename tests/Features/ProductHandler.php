<?php

namespace AragornYang\Onix\Tests\features;

use AragornYang\Onix\Composites\Product;

abstract class ProductHandler
{
    abstract public function handle(Product $product): void;
}