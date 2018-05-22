<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\WorkIdentifier;

trait HasWorkIdentifiers
{
    /** @var WorkIdentifier[] */
    protected $workIdentifiers = [];

    /**
     * @return WorkIdentifier[]
     */
    public function getWorkIdentifiers(): array
    {
        return $this->workIdentifiers;
    }

    public function setWorkIdentifier(\SimpleXMLElement $xml): void
    {
        $this->workIdentifiers[] = WorkIdentifier::buildFromXml($xml, $this);
    }

}