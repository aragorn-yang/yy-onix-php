<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList49RegionCode;

class Territory extends Composite
{
    /** @var CodeInList */
    protected $regionsIncluded;

    /** @var string */
    protected $countriesExcluded = '';

    public function setRegionsIncluded(string $code): void
    {
        $this->regionsIncluded = new CodeInList(CodeList49RegionCode::class, $code);
    }

    public function getRegionsIncluded(): string
    {
        return $this->regionsIncluded ? $this->regionsIncluded->code() : '';
    }

    public function getRegionsIncludedDesc(): string
    {
        return $this->regionsIncluded ? $this->regionsIncluded->desc() : '';
    }

    public function setCountriesExcluded(string $value): void
    {
        $this->countriesExcluded = $value;
    }

    public function getCountriesExcluded(): string
    {
        return $this->countriesExcluded;
    }
}