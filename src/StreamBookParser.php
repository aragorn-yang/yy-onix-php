<?php

namespace AragornYang\Onix;

class StreamBookParser extends BookParser
{
    public function parseString(string $contents): void
    {
        $stream = fopen('php://temp', 'wb+');
        fwrite($stream, $contents);
        rewind($stream);
        $this->parseStream($stream);
    }

    public function parseStream($stream): void
    {
        $xml = new XMLHandler;
        $xml->setProductHandler($this->productHandler);
        while (!feof($stream)) {
            $chunk = fread($stream, 10240);
            $xml->parse($chunk);
        }
        $xml->parse('', true);
    }

    public function parseFile(string $file): void
    {
        $this->parseStream(fopen($file, 'rb'));
    }
}