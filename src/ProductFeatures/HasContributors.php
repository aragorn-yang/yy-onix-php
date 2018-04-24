<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Contributor;

trait HasContributors
{
    /** @var Contributor[] */
    protected $contributors = [];

    public function setContributor(\SimpleXMLElement $xml): void
    {
        $this->contributors[] = Contributor::buildFromXml($xml);
    }

    public function getAuthor(): ?Contributor
    {
        foreach ($this->contributors as $contributor) {
            if ($contributor->isAuthor()) {
                return $contributor;
            }
        }
        return null;
    }
}