<?php

namespace AragornYang\Onix;

use AragornYang\Onix\Composites\Product;

class ProductBuilder
{
    /** @var \SimpleXMLElement */
    protected $xml;
    /** @var Product */
    protected $product;

    public function __construct(\SimpleXMLElement $xml)
    {
        $this->xml = $xml;
        $this->product = new Product;
    }

    public function build(): Product
    {
        return Product::buildFromXml($this->xml);
    }
}