<?php

namespace AragornYang\Onix\Tests\Units;

use AragornYang\Onix\SimpleBookParser;
use AragornYang\Onix\Tests\TestCase;

class SimpleBookParserTest extends TestCase
{
    /** @test */
    public function it_is_instantiable(): void
    {
        $parser = new SimpleBookParser;
        $this->assertTrue(is_a($parser, SimpleBookParser::class));
    }

    /** @test */
    public function it_can_get_onix_version_21_after_parsing(): void
    {
        $parser = new SimpleBookParser;
        $parser->parse($this->stuffIntoRefNameEditionV21(''));
        $this->assertEquals('2.1', $parser->onixVersion());
    }

    /** @test */
    public
    function it_can_get_onix_version_30_after_parsing(): void
    {
        $parser = new SimpleBookParser;
        $parser->parse($this->stuffIntoRefNameEditionV30(''));
        $this->assertEquals('3.0', $parser->onixVersion());
    }

    /** @test */
    public function it_can_get_products_after_parsing_a_ref_edition(): void
    {
        $parser = new SimpleBookParser;
        $parser->parse($this->stuffIntoRefNameEditionV21(
            <<<ONIX
<Product></Product>
<Product></Product>
ONIX
        ));
        $this->assertCount(2, $parser->getProducts());
        foreach ($parser->getProducts() as $product) {
            $this->assertInstanceOf(\AragornYang\Onix\Composites\Product::class, $product);
        }
    }

    /** @test */
    public function it_can_get_products_after_parsing_a_tag_edition(): void
    {
        $parser = new SimpleBookParser;
        $parser->parse($this->stuffIntoShortTagEditionV21(
            <<<ONIX
<product></product>
<product></product>
ONIX
        ));
        $this->assertCount(2, $parser->getProducts());
        foreach ($parser->getProducts() as $product) {
            $this->assertInstanceOf(\AragornYang\Onix\Composites\Product::class, $product);
        }
    }

    /** @test */
    public function it_keeps_a_list_of_unrecognisable_element_names(): void
    {
        $parser = new SimpleBookParser;
        $parser->parse($this->stuffSingleProductContentIntoRefNameEditionV21(<<<ONIX
<UnrecognisableElement1></UnrecognisableElement1>
<UnrecognisableElement2></UnrecognisableElement2>
<UnrecognisableElement2></UnrecognisableElement2>
ONIX
        ));
        $this->assertSame([
            'UnrecognisableElement1' => 1,
            'UnrecognisableElement2' => 2,
        ], $parser->getUnrecognisableElements());
    }

    /** @test */
    public function it_keeps_a_list_of_unrecognisable_codes(): void
    {
        $parser = new SimpleBookParser;
        $parser->parse($this->stuffIntoRefNameEditionV21(<<<ONIX
<Product>
<ProductForm>
    ?1
</ProductForm>
</Product>
<Product>
<ProductForm>
    ?2
</ProductForm>
</Product>
<Product>
<ProductForm>
    ?2
</ProductForm>
</Product>
ONIX
        ));
        $this->assertSame([
            'ProductForm:?1' => 1,
            'ProductForm:?2' => 2,
        ], $parser->getUnrecognisableCodes());
    }
}