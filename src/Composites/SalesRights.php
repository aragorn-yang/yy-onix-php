<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList46SalesRightsType;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;

class SalesRights extends Composite
{
    /** @var CodeInList */
    protected $salesRightsType;
    /** @var CodeInList[] */
    protected $rightsCountries = [];
    /**
     * Code List 49 Where possible and appropriate,
     * country subdivision codes are derived from the UN LOCODE scheme based on ISO 3166.
     * @var string
     */
    protected $rightsTerritory = '';

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

    /**
     * @return CodeInList[]
     */
    public function getRightsCountries(): array
    {
        return $this->rightsCountries;
    }

    public function setRightsCountry(string $code): void
    {
        $this->rightsCountries[] = new CodeInList(CodeList91CountryCodeISO31661::class, $code);
    }

    public function getRightsTerritory(): string
    {
        return $this->rightsTerritory;
    }

    public function setRightsTerritory(string $rightsTerritory): void
    {
        $this->rightsTerritory = $rightsTerritory;
    }
}