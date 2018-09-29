<?php

namespace AragornYang\Onix;

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\Composites\Product21;
use AragornYang\Onix\Composites\V30\Product30;

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

    public function build(\SimpleXMLElement $xml): Product
    {
        if ('2.1' === $this->onixVersion) {
            return Product21::buildFromXml($xml);
        }
        //if ('3.0' === $this->onixVersion) {
        return Product30::buildFromXml($xml);
        //}
    }
}