<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Imprint;
use SimpleXMLElement;
use function count;

trait HasImprints
{
    /** @var Imprint[] */
    protected $imprints = [];

    public function getImprint(): string
    {
        if (count($this->imprints) === 0) {
            return '';
        }
        if (count($this->imprints) === 1) {
            return $this->imprints[0]->getImprintName();
        }
        $imprints = '';
        foreach ($this->imprints as $imprint) {
            $imprints .= $imprint->getImprintName() . '; ';
        }
        return trim($imprints);
    }

    public function getImprints(): array
    {
        return $this->imprints;
    }

    public function setImprint(SimpleXMLElement $xml): void
    {
        $this->imprints[] = Imprint::buildFromXml($xml, $this);
    }
}
