<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList6BarcodeIndicator;
use AragornYang\Onix\Composites\Extent;

trait HasExtents
{
    /** @var Extent[] */
    protected $extents = [];

    public function getExtent(): array
    {
        return $this->extents;
    }

    public function setExtent(\SimpleXMLElement $xml): void
    {
        $this->extents[] = Extent::buildFromXml($xml, $this);
    }

    public function getNumberOfPages(): string
    {
        foreach ($this->extents as $extent) {
            if ('08' !== $extent->getExtentType()) {
                continue;
            }

            return $extent->getExtentValue();
        }

        return '';
    }
}
