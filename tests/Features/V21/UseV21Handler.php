<?php

namespace AragornYang\Onix\Tests\Features\V21;

use AragornYang\Onix\Tests\Features\ProductHandler;

trait UseV21Handler
{
    protected function getHandler(): ProductHandler
    {
        return new V21ProductHandler;
    }
}