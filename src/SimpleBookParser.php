<?php

namespace AragornYang\Onix;

class SimpleBookParser extends BookParser
{
    public function parseString(string $contents): void
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
            $product = $this->onix->buildProduct($value);
            ($this->productHandler)($product);
            $this->productCount++;
        }
    }

    public function parseFile(string $file): void
    {
        $this->parseString(file_get_contents($file));
    }
}