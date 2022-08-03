<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\ContentItem;
use SimpleXMLElement;

trait HasContentItems
{
    /** @var array|ContentItem[] */
    protected $contentItems = [];

    public function getContentItemTexts(): array
    {
        $texts = [];
        foreach ($this->contentItems as $contentItem) {
            $texts[] = $contentItem->getDistinctiveTitle();
        }
        return $texts;
    }

    /**
     * @return ContentItem[]
     */
    public function getContentItems(): array
    {
        return $this->contentItems;
    }

    public function setContentItem(SimpleXMLElement $xml): void
    {
        $this->contentItems[] = ContentItem::buildFromXml($xml, $this);
    }
}