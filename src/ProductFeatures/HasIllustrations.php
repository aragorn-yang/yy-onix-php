<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList81ProductContentType;
use AragornYang\Onix\Composites\Illustrations;

trait HasIllustrations
{
    /** @var array */
    protected $illustrations = [];

    public function getIllustrations(): array
    {
        return $this->illustrations;
    }

    public function setIllustrations(\SimpleXMLElement $xml): void
    {
        $this->illustrations[] = Illustrations::buildFromXml($xml, $this);
    }
}