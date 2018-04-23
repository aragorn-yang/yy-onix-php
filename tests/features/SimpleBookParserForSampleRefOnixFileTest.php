<?php

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\Composites\SupplyDetail;
use AragornYang\Onix\SimpleBookParser;
use PHPUnit\Framework\TestCase;

class SimpleBookParserForSampleRefOnixFileTest extends TestCase
{
    /** @var string */
    protected static $contents;
    /** @var SimpleBookParser */
    protected static $parser;
    /** @var array|Product[] */
    protected static $products;
    /** @var Product */
    protected $product;

    public function __construct()
    {
        parent::__construct();
        if (!static::$products) {
            static::$parser = new SimpleBookParser;
            static::$contents = file_get_contents(__DIR__ . '/../samples/sample.v.2.1.ref.onx');
            static::$parser->parse(static::$contents);
            static::$products = static::$parser->getProducts();
        }
        /** @var Product $product */
        $this->product = static::$products[0];
    }

    /** @test */
    public function it_can_parse_the_sample_file(): void
    {
        $this->assertCount(1, static::$products);
        $this->assertInstanceOf(Product::class, $this->product);
    }

    /** @test */
    public function it_can_get_isbn(): void
    {
        $this->assertSame('0816016356', $this->product->getIsbn10());
        $this->assertSame('9780816016358', $this->product->getIsbn13());
    }

    /** @test */
    public function it_can_get_product_form(): void
    {
        $this->assertSame('BB', $this->product->getProductForm());
        $this->assertSame('Hardback', $this->product->getProductFormDesc());
    }

    /** @test */
    public function it_can_get_title(): void
    {
        $this->assertSame('British English, A to Zed', $this->product->getTitle());
    }

    /** @test */
    public function it_can_get_author(): void
    {
        $this->assertSame('Schur, Norman W', $this->product->getAuthor()->getPersonNameInverted());
    }

    /** @test */
    public function it_can_get_EditionTypeCode(): void
    {
        $this->assertSame('REV', $this->product->getEditionTypeCode());
    }

    /** @test */
    public function it_can_get_EditionNumber(): void
    {
        $this->assertSame('3', $this->product->getEditionNumber());
    }

    /** @test */
    public function it_can_get_Language(): void
    {
        $this->assertSame('eng', $this->product->getLanguageCode());
    }

    /** @test */
    public function it_can_get_NumberOfPages(): void
    {
        $this->assertSame(493, $this->product->getNumberOfPages());
    }

    /** @test */
    public function it_can_get_BASICMainSubject(): void
    {
        $this->assertSame('REF008000', $this->product->getBASICMainSubject());
    }

    /** @test */
    public function it_can_get_AudienceCode(): void
    {
        $this->assertSame('01', $this->product->getAudienceCode());
    }

    /** @test */
    public function it_can_get_MainDescription(): void
    {
        $this->assertSame(0, stripos($this->product->getMainDescription(),
            'BRITISH ENGLISH, A TO ZED is the thoroughly updated, revised, and expanded third edition of Norman'));
    }

    /** @test */
    public function it_can_get_ReviewQuote(): void
    {
        $this->assertSame(0, stripos($this->product->getReviewQuote(),
            'Norman Schur is without doubt the outstanding authority on the similarities and differences between'));
    }

    /** @test */
    public function it_can_get_imprint(): void
    {
        $this->assertSame('Facts on File Publications', $this->product->getImprint());
    }

    /** @test */
    public function it_can_get_publisher(): void
    {
        $this->assertSame('Facts on File Inc', $this->product->getPublisher());
    }

    /** @test */
    public function it_can_get_pub_date(): void
    {
        $this->assertSame('1987', $this->product->getPublicationDate());
    }

    /** @test */
    public function it_can_get_measures(): void
    {
        $this->assertSame(9.25, $this->product->getHeightMeasurement());
        $this->assertSame('in', $this->product->getHeightUnit());
        $this->assertSame(6.25, $this->product->getWidthMeasurement());
        $this->assertSame('in', $this->product->getWidthUnit());
        $this->assertSame(1.2, $this->product->getThicknessMeasurement());
        $this->assertSame('in', $this->product->getThicknessUnit());
    }

    /** @test */
    public function it_can_get_supply_details(): void
    {
        $this->assertCount(1, $this->product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $this->product->getSupplyDetails()[0];
        $this->assertSame('1234567', $supplyDetail->getSupplierSAN());
        $this->assertSame('IP', $supplyDetail->getAvailabilityCode());
        $price = $supplyDetail->getPrice();
        $this->assertTrue($price->isRrpExcTax());
        $this->assertSame(35.0, $price->getPriceAmount());
    }
}