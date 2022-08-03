<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Title;
use SimpleXMLElement;

trait HasTitles
{
    /** @var string */
    protected $title = '';

    /** @var Title */
    protected $titleObj;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(SimpleXMLElement $xml): void
    {
        /** @var Title $title */
        $title = Title::buildFromXml($xml, $this);
        $this->titleObj = $title;
        if ($title->isDistinctiveTitle()) {
            $this->title = $title->getFullTitle();
        }
    }

    /** @return Title */
    public function getTitleObj(): ?Title
    {
        return $this->titleObj;
    }
}