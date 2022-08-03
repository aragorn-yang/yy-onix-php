<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\AudienceRange;
use SimpleXMLElement;

trait HasAudienceRanges
{
    /** @var array|AudienceRange */
    protected $audienceRange = [];

    public function getAudienceRange(): array
    {
        return $this->audienceRange;
    }

    public function setAudienceRange(SimpleXMLElement $xml): void
    {
        $this->audienceRange[] = AudienceRange::buildFromXml($xml, $this);
    }
}