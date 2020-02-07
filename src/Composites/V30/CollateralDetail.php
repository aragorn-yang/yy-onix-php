<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\Composites\V30\TextContents;

class CollateralDetail extends Composite
{
    /** @var TextContents[] */
    protected $textContents;

    public function setTextContent(\SimpleXMLElement $xml): void
    {
        $this->textContents[] = TextContents::buildFromXml($xml, $this);
    }

    public function getTextContents(): array
    {
        return $this->textContents;
    }
}