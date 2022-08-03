<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Publisher;
use SimpleXMLElement;
use function count;

trait HasPublishers
{
    /** @var Publisher[] */
    protected $publishers = [];

    public function getPublisherNames(): string
    {
        if (count($this->publishers) === 0) {
            return '';
        }
        if (count($this->publishers) === 1) {
            return $this->publishers[0]->getPublisherName();
        }
        $publishers = '';
        foreach ($this->publishers as $publisher) {
            $publishers .= $publisher->getPublisherName() . '; ';
        }
        return trim($publishers);
    }

    public function setPublisher(SimpleXMLElement $xml): void
    {
        $this->publishers[] = Publisher::buildFromXml($xml, $this);
    }

    /**
     * @return Publisher[]
     */
    public function getPublishers(): array
    {
        return $this->publishers;
    }
}