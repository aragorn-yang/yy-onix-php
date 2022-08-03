<?php

namespace AragornYang\Onix\Tests\Units;

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\Tests\TestCase;
use AragornYang\Onix\XMLReaderBookParser;

class XMLReaderBookParserTest extends TestCase
{
    /** @var XMLReaderBookParser */
    private $parser;

    /** @var array|Product[] */
    private $products = [];

    /** @test */
    public function it_is_instantiable(): void
    {
        $this->iniParser();
        $this->assertTrue(is_a($this->parser, XMLReaderBookParser::class));
    }

    /** @test */
    public function it_can_get_onix_version_21_after_parsing(): void
    {
        $this->iniParser();
        $this->parser->parseString($this->stuffIntoRefNameEditionV21(''));
        $this->assertEquals('2.1', $this->parser->onixVersion());
    }

    /** @test */
    public function it_can_get_onix_version_30_after_parsing(): void
    {
        $this->iniParser();
        $this->parser->parseString($this->stuffIntoRefNameEditionV30(''));
        $this->assertEquals('3.0', $this->parser->onixVersion());
    }

    /** @test */
    public function it_can_get_products_after_parsing_a_ref_edition(): void
    {
        $this->iniParser();
        $this->parser->parseString($this->stuffIntoRefNameEditionV21(
            <<<ONIX
<Product></Product>
<Product></Product>
ONIX
        ));
        $this->assertCount(2, $this->products);
        foreach ($this->products as $product) {
            $this->assertInstanceOf(Product::class, $product);
        }
    }

    /** @test */
    public function it_can_get_products_after_parsing_a_tag_edition(): void
    {
        $this->iniParser();
        $this->parser->parseString($this->stuffIntoShortTagEditionV21(
            <<<ONIX
<product></product>
<product></product>
ONIX
        ));
        $this->assertCount(2, $this->products);
        foreach ($this->products as $product) {
            $this->assertInstanceOf(Product::class, $product);
        }
    }

    /** @test */
    public function it_keeps_a_list_of_unrecognisable_element_names(): void
    {
        $this->iniParser();
        $this->parser->parseString($this->stuffSingleProductContentIntoRefNameEditionV21(<<<ONIX
<UnrecognisableElement1></UnrecognisableElement1>
<UnrecognisableElement2></UnrecognisableElement2>
<UnrecognisableElement2></UnrecognisableElement2>
ONIX
        ));
        $this->assertSame([
            'Product->UnrecognisableElement1' => 1,
            'Product->UnrecognisableElement2' => 2,
        ], $this->parser->getUnrecognisableElements());
    }

    /** @test */
    public function it_keeps_a_list_of_unrecognisable_codes(): void
    {
        $this->iniParser();
        $this->parser->parseString($this->stuffIntoRefNameEditionV21(<<<ONIX
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
        ], $this->parser->getUnrecognisableCodes());
    }

    protected function iniParser(): void
    {
        $this->parser = new XMLReaderBookParser;
        $this->parser->setProductHandler(function (Product $product) {
            $this->products[] = $product;
        });
    }
}