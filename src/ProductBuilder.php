<?php

namespace AragornYang\Onix;

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\Composites\Product21;
use AragornYang\Onix\Composites\V30\Product30;
use RuntimeException;
use SimpleXMLElement;

class ProductBuilder
{
    /**
     * @var string
     */
    private $onixVersion;

    public function __construct(string $onixVersion)
    {
        $this->onixVersion = $onixVersion;
    }

    public function build(SimpleXMLElement $xml): Product
    {
        if ('2.1' === $this->onixVersion) {
            $product = Product21::buildFromXml($xml);
            $product->setProductXml($xml);
            return $product;
        }

        if ('3.0' === $this->onixVersion) {
            $product = Product30::buildFromXml($xml);
            $product->setProductXml($xml);
            return $product;
        }
        throw new RuntimeException("Unknown onix version: {$this->onixVersion}");
    }
}
