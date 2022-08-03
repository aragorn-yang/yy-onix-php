<?php

namespace AragornYang\Onix;

use DOMDocument;
use DOMElement;
use DOMImplementation;
use RuntimeException;
use function count;

class XMLHandler
{
    /** @var callable */
    protected $productHandler;
    /** @var array */
    protected $openElements = [];
    /** @var DOMDocument */
    protected $productDOM;
    /** @var DOMElement */
    protected $currentElement;

    public function __construct()
    {
        $this->domImpl = new DOMImplementation();
        // Create a parser that outputs UTF-8.
        $parser = xml_parser_create('UTF-8');
        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        xml_set_object($parser, $this);
        xml_set_element_handler($parser, 'handleElementStart', 'handleElementEnd');
        xml_set_character_data_handler($parser, 'handleText');
        $this->parser = $parser;
    }

    public function setProductHandler(callable $productHandler): void
    {
        $this->productHandler = $productHandler;
    }

    public function parse(string $chunk, bool $endOfFile = false): void
    {
        xml_parse($this->parser, $chunk, $endOfFile);
    }

    protected function handleElementStart(
        /** @noinspection PhpUnusedParameterInspection */
        $parser,
        string $name,
        array $attributes
    ): void {
        $level = count($this->openElements);
        // If this is the root element, set whether short tags are used or not.
        if ($level === 0) {
            $this->parOnixEdition($name, $attributes);
        }
        $this->openElements[] = $name;
        if (ucfirst($name) === 'Product') {
            $this->productDOM = $this->domImpl->createDocument(null, $name);
            $this->currentElement = $this->productDOM->documentElement;
        } elseif ($this->productDOM) {
            $el = $this->productDOM->createElement($name);
            foreach ($attributes as $k => $v) {
                $el->setAttribute($k, $v);
            }
            $this->currentElement->appendChild($el);
            $this->currentElement = $el;
        }
    }

    protected function handleElementEnd(
        /** @noinspection PhpUnusedParameterInspection */
        $parser,
        string $name
    ): void {
        array_pop($this->openElements);
        if ($this->productDOM) {
            $this->currentElement = $this->currentElement->parentNode;
            if (ucfirst($name) === 'Product') {
                $this->productDOM->normalizeDocument();
                $this->handleProduct($this->productDOM);
                $this->productDOM = null;
            }
        }
    }

    protected function handleText(
        /** @noinspection PhpUnusedParameterInspection */
        $parser,
        string $text
    ): void {
        if ($this->productDOM) {
            /** @noinspection CallableParameterUseCaseInTypeContextInspection */
            $text = $this->productDOM->createTextNode($text);
            $this->currentElement->appendChild($text);
        }
    }

    private function handleProduct(DOMDocument $productDOM): void
    {
        ($this->productHandler)(Onix::getInstance()->buildProduct(simplexml_load_string($productDOM->saveXML())));
    }

    protected function parOnixEdition(string $name, array $attributes): void
    {
        $onix = Onix::getInstance();
        if (isset($attributes['release'])) {
            $onix->setVersion($attributes['release']);
        } else {
            $onix->setVersion('2.1');
        }

        switch ($name) {
            case 'ONIXMessage':
                $onix->setAsRefEdition();
                break;
            case 'ONIXmessage':
                $onix->setAsTagEdition();
                break;
            default:
                throw new RuntimeException("$name is an invalid root element name");
        }
    }
}