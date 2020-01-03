<?php

namespace AragornYang\Onix\Composites;

class NotForSale extends Composite
{
    /** @var string */
    protected $rightsCountry = '';

    public function setRightsCountry(string $rightsCountry): void
    {
        $this->rightsCountry = $rightsCountry;
    }

    public function getRightsCountry(): string
    {
        return $this->rightsCountry;
    }
}