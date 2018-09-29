<?php

namespace AragornYang\Onix\Tests\features\V30;

use AragornYang\Onix\Tests\features\ProductHandler;

trait UseV30Handler
{
    protected function getHandler(): ProductHandler
    {
        return new V30ProductHandler;
    }
}