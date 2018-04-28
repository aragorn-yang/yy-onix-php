<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Title;

trait HasTitles
{
    /** @var string */
    protected $title = '';

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(\SimpleXMLElement $xml): void
    {
        /** @var Title $title */
        $title = Title::buildFromXml($xml, $this);
        if ($title->isDistinctiveTitle()) {
            $this->title = $title->getFullTitle();
            return;
        }
    }
}