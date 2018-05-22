<?php

namespace AragornYang\Onix\Tests\units\Composites;

use AragornYang\Onix\Composites\WorkIdentifier;
use AragornYang\Onix\Tests\TestCase;

class WorkIdentifierTest extends TestCase
{
    /** @test */
    public function it_has_work_id_type(): void
    {
        $product = $this->getParsedProduct('<WorkIdentifier>
      <WorkIDType>01</WorkIDType>
</WorkIdentifier>');
        $this->assertCount(1, $product->getWorkIdentifiers());
        /** @var WorkIdentifier $workIdentifier */
        $workIdentifier = $product->getWorkIdentifiers()[0];
        $this->assertSame('01', $workIdentifier->getWorkIDType());
        $this->assertSame('Proprietary', $workIdentifier->getWorkIDTypeDesc());
    }

    /** @test */
    public function it_has_id_value(): void
    {
        $product = $this->getParsedProduct('<WorkIdentifier>
      <IDValue>150815177</IDValue>
</WorkIdentifier>');
        $this->assertCount(1, $product->getWorkIdentifiers());
        /** @var WorkIdentifier $workIdentifier */
        $workIdentifier = $product->getWorkIdentifiers()[0];
        $this->assertSame('150815177', $workIdentifier->getIDValue());
    }
}