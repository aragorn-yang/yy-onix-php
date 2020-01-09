<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList41PrizeOrAwardAchievement;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;

class Prize extends Composite
{
    /** @var string */
    protected $prizeName = '';

    /** @var string */
    protected $prizeYear = '';

    /** @var CodeInList */
    protected $prizeCode;

    /** @var CodeInList */
    protected $prizeCountry;

    /** @var string */
    protected $prizeJury = '';

    public function getPrizeName(): string
    {
        return $this->prizeName;
    }

    public function setPrizeName(string $prizeName): void
    {
        $this->prizeName = $prizeName;
    }

    public function setPrizeYear(string $value): void
    {
        $this->prizeYear = $value;
    }

    public function getPrizeYear(): string
    {
        return $this->prizeYear;
    }

    public function setPrizeCode(string $code): void
    {
        $this->prizeCode = new CodeInList(CodeList41PrizeOrAwardAchievement::class, $code);
    }

    public function getPrizeCode(): string
    {
        return $this->prizeCode ? $this->prizeCode->code() : '';
    }

    public function getPrizeCodeDesc(): string
    {
        return $this->prizeCode ? $this->prizeCode->desc() : '';
    }

    public function setPrizeCountry(string $code): void
    {
        $this->prizeCountry = new CodeInList(CodeList91CountryCodeISO31661::class, $code);
    }

    public function getPrizeCountry(): string
    {
        return $this->prizeCountry ? $this->prizeCountry->code() : '';
    }

    public function getPrizeCountryDesc(): string
    {
        return $this->prizeCountry ? $this->prizeCountry->desc() : '';
    }

    public function setPrizeJury(string $value): void
    {
        $this->prizeJury = $value;
    }

    public function getPrizeJury(): string
    {
        return $this->prizeJury;
    }
}