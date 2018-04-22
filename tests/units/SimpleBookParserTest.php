<?php

use AragornYang\Onix\SimpleBookParser;
use PHPUnit\Framework\TestCase;

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
        $parser->parse(<<<'ONIX'
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE ONIXMessage SYSTEM "http://www.editeur.org/onix/2.1/reference/onix-international.dtd">
<ONIXMessage>
</ONIXMessage>
ONIX
        );
        $this->assertEquals('2.1', $parser->onixVersion());
    }

    /** @test */
    public
    function it_can_get_onix_version_30_after_parsing(): void
    {
        $parser = new SimpleBookParser;
        $parser->parse(<<<'ONIX'
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE ONIXMessage SYSTEM "http://www.editeur.org/onix/2.1/reference/onix-international.dtd">
<ONIXMessage release="3.0">
</ONIXMessage>
ONIX
        );
        $this->assertEquals('3.0', $parser->onixVersion());
    }

    /** @test */
    public function it_can_get_products_after_parsing_a_ref_edition(): void
    {
        $parser = new SimpleBookParser;
        $parser->parse(<<<'ONIX'
<?xml version="1.0"?>
<ONIXMessage>
<Product></Product>
<Product></Product>
</ONIXMessage>
ONIX
        );
        $this->assertCount(2, $parser->getProducts());
        foreach ($parser->getProducts() as $product) {
            $this->assertInstanceOf(\AragornYang\Onix\Composites\Product::class, $product);
        }
    }

    /** @test */
    public function it_can_get_products_after_parsing_a_tag_edition(): void
    {
        $parser = new SimpleBookParser;
        $parser->parse(<<<'ONIX'
<?xml version="1.0"?>
<ONIXmessage>
<product></product>
<product></product>
</ONIXmessage>
ONIX
        );
        $this->assertCount(2, $parser->getProducts());
        foreach ($parser->getProducts() as $product) {
            $this->assertInstanceOf(\AragornYang\Onix\Composites\Product::class, $product);
        }
    }

    /** @test */
    public function it_keeps_a_list_of_unrecognisable_element_names(): void
    {
        $parser = new SimpleBookParser;
        $parser->parse(<<<'ONIX'
<?xml version="1.0"?>
<ONIXMessage>
<Product>
<UnrecognisableElement1></UnrecognisableElement1>
<UnrecognisableElement2></UnrecognisableElement2>
<UnrecognisableElement2></UnrecognisableElement2>
</Product>
</ONIXMessage>
ONIX
        );
        $this->assertSame([
            'UnrecognisableElement1' => 1,
            'UnrecognisableElement2' => 2,
        ], $parser->getUnrecognisableElements());
    }
}