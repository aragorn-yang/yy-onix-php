<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\ContainedItem;
use SimpleXMLElement;

trait HasContainedItems
{
    /** @var array|ContainedItem[] */
    protected $containedItems = [];

    /**
     * @return ContainedItem[]
     */
    public function getContainedItems(): array
    {
        return $this->containedItems;
    }

    public function setContainedItem(SimpleXMLElement $xml): void
    {
        $this->containedItems[] = ContainedItem::buildFromXml($xml, $this);
    }
}