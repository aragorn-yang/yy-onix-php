<?php

namespace AragornYang\Onix;

use AragornYang\Onix\Composites\Product;

class SimpleBookParser
{
    /** @var Onix */
    protected $onix;
    /** @var Product[] */
    protected $products = [];

    public function __construct()
    {
        $this->onix = Onix::getNewInstance();
    }

    public function onixVersion(): string
    {
        return $this->onix->version();
    }

    public function parse(string $contents): void
    {
        $xml = simplexml_load_string($contents);
        if ((string)$xml['release']) {
            $this->onix->setVersion((string)$xml['release']);
        } else {
            $this->onix->setVersion('2.1');
        }
        if (property_exists($xml, 'Product')) {
            $this->onix->setAsRefEdition();
        } elseif (property_exists($xml, 'product')) {
            $this->onix->setAsTagEdition();
        }
        foreach ($xml->{$this->onix->getProductKey()} as $value) {
            $this->products[] = $this->onix->buildProduct($value);
        }
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getUnrecognisableElements(): array
    {
        return $this->onix->getUnrecognisableElements();
    }

    public function getUnrecognisableCodes(): array
    {
        return $this->onix->getUnrecognisableCodes();
    }
}