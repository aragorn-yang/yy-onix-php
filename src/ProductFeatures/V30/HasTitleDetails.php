<?php

namespace AragornYang\Onix\ProductFeatures\V30;

use AragornYang\Onix\Composites\V30\TitleDetail;

trait HasTitleDetails
{
    /** @var TitleDetail[] */
    protected $titleDetails = [];

    public function setTitleDetail(\SimpleXMLElement $xml): void
    {
        $this->titleDetails[] = TitleDetail::buildFromXml($xml, $this);
    }

    public function getTitleDetails(): ?array
    {
        return $this->titleDetails;
    }
}