<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList67MarketDateRole;

class MarketDate extends Composite
{
    /** @var CodeInList */
    protected $marketDateRole;

    /** @var string */
    protected $date = '';

    public function getMarketDateRole(): string
    {
        return $this->marketDateRole ? $this->marketDateRole->code() : '';
    }

    public function getMarketDateRoleDesc(): string
    {
        return $this->marketDateRole ? $this->marketDateRole->desc() : '';
    }

    public function setMarketDateRole(string $code): void
    {
        $this->marketDateRole = new CodeInList(CodeList67MarketDateRole::class, $code);
    }

    public function setDate(string $value): void
    {
        $this->date = $value;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}