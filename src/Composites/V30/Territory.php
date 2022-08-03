<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList49RegionCode;
use AragornYang\Onix\Composites\Composite;

class Territory extends Composite
{
    /** @var CodeInList */
    protected $regionsIncluded;

    /** @var string */
    protected $countriesExcluded = '';

    /** @var string */
    protected $countriesIncluded = '';

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

    public function setCountriesIncluded(string $value): void
    {
        $this->countriesIncluded = $value;
    }

    public function getCountriesIncluded(): string
    {
        return $this->countriesIncluded;
    }
}