<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Illustrations;
use SimpleXMLElement;

trait HasIllustrations
{
    /** @var array */
    protected $illustrations = [];

    public function getIllustrations(): array
    {
        return $this->illustrations;
    }

    public function setIllustrations(SimpleXMLElement $xml): void
    {
        $this->illustrations[] = Illustrations::buildFromXml($xml, $this);
    }
}