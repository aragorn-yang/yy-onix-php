<?php

namespace AragornYang\Onix\Tests\Units\Composites;

use AragornYang\Onix\Composites\Audience;
use AragornYang\Onix\Tests\TestCase;

class AudienceTest extends TestCase
{
    /** @var Audience */
    protected $audience;

    protected function setUp(): void
    {
        parent::setUp();

        $product = $this->getParsedProduct('
        <Audience>
            <AudienceCodeType>02</AudienceCodeType>
            <AudienceCodeTypeName>Springer Nature Content Level</AudienceCodeTypeName>
            <AudienceCodeValue>Professional/practitioner</AudienceCodeValue>
        </Audience>');
        $this->assertCount(1, $product->getAudiences());
        $this->audience = $product->getAudiences()[0];
    }

    /** @test */
    public function it_has_audience_code_type(): void
    {
        $this->assertSame('02', $this->audience->getAudienceCodeType());
        $this->assertSame('Proprietary', $this->audience->getAudienceCodeTypeDesc());
    }

    /** @test */
    public function it_has_audience_code_type_name(): void
    {
        $this->assertSame('Springer Nature Content Level', $this->audience->getAudienceCodeTypeName());
    }

    /** @test */
    public function it_has_audience_code_value(): void
    {
        $this->assertSame('Professional/practitioner', $this->audience->getAudienceCodeValue());
    }
}