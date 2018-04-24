<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasNotificationTypeTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<NotificationType>03</NotificationType>');
        $this->assertSame('03', $product->getNotificationType());
        $this->assertSame('Notification confirmed on publication', $product->getNotificationTypeDesc());
    }
}