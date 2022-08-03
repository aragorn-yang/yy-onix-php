<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Extent;
use SimpleXMLElement;

trait HasExtents
{
    /** @var Extent[] */
    protected $extents = [];

    public function getExtent(): array
    {
        return $this->extents;
    }

    public function setExtent(SimpleXMLElement $xml): void
    {
        $this->extents[] = Extent::buildFromXml($xml, $this);
    }

    public function getExtentsNumberOfPages(): int
    {
        foreach ($this->extents as $extent) {
            if ('08' !== $extent->getExtentType()) {
                continue;
            }

            return (int)$extent->getExtentValue();
        }

        return 0;
    }
}
