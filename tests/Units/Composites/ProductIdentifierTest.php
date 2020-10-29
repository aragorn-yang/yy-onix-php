<?php

namespace AragornYang\Onix\Tests\units\Composites;

use AragornYang\Onix\Composites\ProductIdentifier;
use AragornYang\Onix\Tests\TestCase;

class ProductIdentifierTest extends TestCase
{
    /** @var ProductIdentifier[] */
    protected $identifiers = [];
    /** @var ProductIdentifier */
    protected $identifier;

    protected function setUp(): void
    {
        parent::setUp();
        $product = $this->getParsedProduct('<ProductIdentifier>
            <ProductIDType>01</ProductIDType>
            <IDTypeName>ISBN-13 hyphenated</IDTypeName>
            <IDValue>978-3-531-15389-6</IDValue>
        </ProductIdentifier>');
        $this->identifiers = $product->getProductIdentifiers();
        $this->identifier = array_pop($this->identifiers);
    }

    /** @test */
    public function it_has_product_id_type(): void
    {
        $this->assertSame('01', $this->identifier->getProductIDType());
    }

    /** @test */
    public function it_has_id_type_name(): void
    {
        $this->assertSame('ISBN-13 hyphenated', $this->identifier->getIDTypeName());
    }

    /** @test */
    public function it_has_id_value(): void
    {
        $this->assertSame('978-3-531-15389-6', $this->identifier->getIDValue());
    }
}