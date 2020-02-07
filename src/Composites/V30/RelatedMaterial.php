<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\Composites\V30\RelatedWork;

class RelatedMaterial extends Composite
{
    /** @var RelatedWork[] */
    protected $relatedWorks;

    public function setRelatedWork(\SimpleXMLElement $xml): void
    {
        $this->relatedWorks[] = RelatedWork::buildFromXml($xml, $this);
    }

    public function getRelatedWorks(): array
    {
        return $this->relatedWorks;
    }
}