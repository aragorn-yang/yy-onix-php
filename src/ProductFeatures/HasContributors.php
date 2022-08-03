<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Contributor;
use SimpleXMLElement;

trait HasContributors
{
    /** @var Contributor[] */
    protected $contributors = [];

    public function setContributor(SimpleXMLElement $xml): void
    {
        $this->contributors[] = Contributor::buildFromXml($xml, $this);
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

    public function getContributors()
    {
        return $this->contributors;
    }
}