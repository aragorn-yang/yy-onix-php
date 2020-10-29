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

    /** @test */
    public function publishers_can_have_name_code(): void
    {
        $product = $this->getParsedProduct('<Publisher>
      <PublishingRole>01</PublishingRole>
      <NameCodeType>01</NameCodeType>
      <NameCodeTypeName>Victory Belt Publishing</NameCodeTypeName>
      <NameCodeValue>SIMO376</NameCodeValue>
    </Publisher>');
        $this->assertSame('Victory Belt Publishing', $product->getPublisherNames());
        $publisher = $product->getPublishers()[0];
        $this->assertSame('Victory Belt Publishing', $publisher->getPublisherName());
        $this->assertSame('01', $publisher->getPublishingRole());
        $this->assertSame('01', $publisher->getNameCodeType());
        $this->assertSame('Proprietary', $publisher->getNameCodeTypeDesc());
        $this->assertSame('Victory Belt Publishing', $publisher->getNameCodeTypeName());
        $this->assertSame('SIMO376', $publisher->getNameCodeValue());
    }
}