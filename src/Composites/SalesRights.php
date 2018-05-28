<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList46SalesRightsType;
use AragornYang\Onix\CodeLists\CodeList49RegionCodeSimplified;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;

class SalesRights extends Composite
{
    /** @var CodeInList */
    protected $salesRightsType;
    /** @var array */
    protected $rightsCountries = [];
    /**
     * Code List 49 Where possible and appropriate,
     * country subdivision codes are derived from the UN LOCODE scheme based on ISO 3166.
     * @var array
     */
    protected $rightsTerritories = [];

    public function getSalesRightsType(): string
    {
        return $this->salesRightsType ? $this->salesRightsType->code() : '';
    }

    public function getSalesRightsTypeDesc(): string
    {
        return $this->salesRightsType ? $this->salesRightsType->desc() : '';
    }

    public function setSalesRightsType(string $code): void
    {
        $this->salesRightsType = new CodeInList(CodeList46SalesRightsType::class, $code);
    }

    public function getRightsCountries(): array
    {
        return $this->rightsCountries;
    }

    public function setRightsCountry(string $codes): void
    {
        foreach (explode(' ', $codes) as $code) {
            if (!$code) {
                continue;
            }
            new CodeInList(CodeList91CountryCodeISO31661::class, $code);
            $this->rightsCountries[] = $code;
        }
    }

    public function getRightsTerritories(): array
    {
        return $this->rightsTerritories;
    }

    public function setRightsTerritory(string $codes): void
    {
        foreach (explode(' ', $codes) as $code) {
            if (!$code) {
                continue;
            }
            new CodeInList(CodeList49RegionCodeSimplified::class, $code);
            $this->rightsTerritories[] = $code;
        }
    }

    public function contains(string $code): bool
    {
        return \in_array($code, $this->getRightsCountries(), true);
    }

    public function forWorld(): bool
    {
        return \in_array('WORLD', $this->getRightsTerritories(), true);
    }

    public function forRestOfWorld(): bool
    {
        return \in_array('ROW', $this->getRightsTerritories(), true);
    }
}