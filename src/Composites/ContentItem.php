<?php

namespace AragornYang\Onix\Composites;

use SimpleXMLElement;

/**
 * @see PR.18 Content items in Onix Spec 2.1
 * Class ContentItem
 * @package AragornYang\Onix\Composites
 */
class ContentItem extends Composite
{
    /** @var TextItem */
    protected $textItem;
    /** @var string */
    protected $componentNumber = '';
    /** @var string */
    protected $componentTypeName = '';
    /** @var string */
    protected $distinctiveTitle = '';

    public function getTextItem(): TextItem
    {
        return $this->textItem;
    }

    public function setTextItem(SimpleXMLElement $xml): void
    {
        $this->textItem = TextItem::buildFromXml($xml, $this);
    }

    public function getComponentNumber(): string
    {
        return $this->componentNumber;
    }

    public function setComponentNumber(string $componentNumber): void
    {
        $this->componentNumber = $componentNumber;
    }

    public function getDistinctiveTitle(): string
    {
        return $this->distinctiveTitle;
    }

    public function setDistinctiveTitle(string $distinctiveTitle): void
    {
        $this->distinctiveTitle = trim($distinctiveTitle);
    }

    public function getComponentTypeName(): string
    {
        return $this->componentTypeName;
    }

    public function setComponentTypeName(string $componentTypeName): void
    {
        $this->componentTypeName = $componentTypeName;
    }
}