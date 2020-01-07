<?php

namespace AragornYang\Onix;

class StreamBookParser2 extends BookParser
{
    public function parseString(string $xmlString): void
    {
        $xml = new \XMLReader();
        $xml->xml($xmlString, 'UTF-8');
        $this->parseStream($xml);
    }

    public function parseFile(string $xmlFile): void
    {
        $xml = new \XMLReader();
        $xml->open($xmlFile, 'UTF-8');
        $this->parseStream($xml);
    }

    public function parseStream(\XMLReader $xml): void
    {
        while ($xml->read()) {
            if ($xml->nodeType != \XMLReader::ELEMENT) {
                continue;
            }

            if (ucfirst($xml->name) == 'Product') {
                //$productList[] = $xml->readOuterXML(); // 获取当前整个 product 内容（字符串）
                $xmlDom = $xml->readOuterXml();
                ($this->productHandler)(Onix::getInstance()->buildProduct(simplexml_load_string($xmlDom)));
            } elseif (in_array(ucfirst($xml->name), ['ONIXMessage', 'ONIXmessage'])) {
                $this->parOnixEdition($xml);
            } else {
                continue;
            }
        }
    }

    protected function parOnixEdition($xml): void
    {
        $onix = Onix::getInstance();

        if ($xml->GetAttribute('release')) {
            $onix->setVersion($xml->GetAttribute('release'));
        } else {
            $onix->setVersion('2.1');
        }

        switch (ucfirst($xml->name)) {
            case 'ONIXMessage':
                $onix->setAsRefEdition();
                break;
            case 'ONIXmessage':
                $onix->setAsTagEdition();
                break;
            default:
                throw new \RuntimeException(ucfirst($xml->name) . " is an invalid root element name");
        }
    }
}