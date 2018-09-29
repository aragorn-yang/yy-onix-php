<?php

namespace AragornYang\Onix\Tests\features\V21;

use AragornYang\Onix\Tests\features\ProductHandler;

trait UseV21Handler
{
    protected function getHandler(): ProductHandler
    {
        return new V21ProductHandler;
    }
}