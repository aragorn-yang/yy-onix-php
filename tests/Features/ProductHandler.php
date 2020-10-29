<?php

namespace AragornYang\Onix\Tests\Features;

use AragornYang\Onix\Composites\Product;

abstract class ProductHandler
{
    abstract public function handle(Product $product): void;
}