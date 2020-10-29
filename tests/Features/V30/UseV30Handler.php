<?php

namespace AragornYang\Onix\Tests\Features\V30;

use AragornYang\Onix\Tests\Features\ProductHandler;

trait UseV30Handler
{
    protected function getHandler(): ProductHandler
    {
        return new V30ProductHandler;
    }
}