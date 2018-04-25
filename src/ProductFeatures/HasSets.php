<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Set;

trait HasSets
{
    /** @var array|Set[] */
    protected $sets = [];

    /**
     * @return Set[]
     */
    public function getSets(): array
    {
        return $this->sets;
    }

    public function setSet(\SimpleXMLElement $xml): void
    {
        $this->sets[] = Set::buildFromXml($xml);
    }
}