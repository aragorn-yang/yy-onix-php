<?php

namespace AragornYang\Onix\Tests\units\Composites;

use AragornYang\Onix\Composites\WorkIdentifier;
use AragornYang\Onix\Tests\TestCase;

class WorkIdentifierTest extends TestCase
{
    /** @var WorkIdentifier */
    protected $workIdentifier;

    protected function setUp(): void
    {
        parent::setUp();

        $product = $this->getParsedProduct('<WorkIdentifier>
            <WorkIDType>01</WorkIDType>
            <IDValue>150815177</IDValue>
        </WorkIdentifier>');
        $this->assertCount(1, $product->getWorkIdentifiers());
        $this->workIdentifier = $product->getWorkIdentifiers()[0];
    }

    /** @test */
    public function it_has_work_id_type(): void
    {
        $this->assertSame('01', $this->workIdentifier->getWorkIDType());
        $this->assertSame('Proprietary', $this->workIdentifier->getWorkIDTypeDesc());
    }

    /** @test */
    public function it_has_id_value(): void
    {
        $this->assertSame('150815177', $this->workIdentifier->getIDValue());
    }
}