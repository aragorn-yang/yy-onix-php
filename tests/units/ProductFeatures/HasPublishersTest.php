<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasPublishersTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Publisher>
            <PublishingRole>01</PublishingRole>
            <PublisherName>Facts on File Inc</PublisherName>
        </Publisher>');
        $this->assertSame('Facts on File Inc', $product->getPublisherNames());

        $product = $this->getParsedProduct('
        <Publisher>
            <PublisherName>Clarendon Press</PublisherName>
            <Website>
                <WebsiteRole>01</WebsiteRole>
                <WebsiteLink>http://www.oup.com</WebsiteLink>
            </Website>
        </Publisher>');
        $this->assertSame('Clarendon Press', $product->getPublisherNames());
        $this->assertSame('http://www.oup.com', $product->getPublishers()[0]->getWebsites()[0]->getWebsiteLink());
    }
}