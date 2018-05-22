<?php

namespace AragornYang\Onix\Tests\units\Composites;

use AragornYang\Onix\Composites\Audience;
use AragornYang\Onix\Tests\TestCase;

class AudienceTest extends TestCase
{
    /** @test */
    public function it_has_audience_code_type(): void
    {
        $product = $this->getParsedProduct('<Audience>
      <AudienceCodeType>01</AudienceCodeType>
    </Audience>');
        $this->assertCount(1, $product->getAudiences());
        /** @var Audience $audience */
        $audience = $product->getAudiences()[0];
        $this->assertSame('01', $audience->getAudienceCodeType());
        $this->assertSame('ONIX audience codes', $audience->getAudienceCodeTypeDesc());
    }

    /** @test */
    public function it_has_audience_code_value(): void
    {
        $product = $this->getParsedProduct('<Audience>
      <AudienceCodeValue>01</AudienceCodeValue>
    </Audience>');
        $this->assertCount(1, $product->getAudiences());
        /** @var Audience $audience */
        $audience = $product->getAudiences()[0];
        $this->assertSame('01', $audience->getAudienceCodeValue());
    }
}