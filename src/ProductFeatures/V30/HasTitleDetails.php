<?php

namespace AragornYang\Onix\ProductFeatures\V30;

use AragornYang\Onix\Composites\V30\TitleDetail;
use AragornYang\Onix\Composites\V30\TitleElement;

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

    public function getTitle(): string
    {
        foreach ($this->titleDetails as $titleDetail) {
            /** @var TitleDetail $titleDetail */
            if ('01' !== $titleDetail->getTitleType()) {
                continue;
            }
            return $titleDetail->getTitleStatement();
        }
        return '';
    }
}
