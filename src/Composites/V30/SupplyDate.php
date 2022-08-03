<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList166SupplyDateRole;
use AragornYang\Onix\Composites\Composite;

class SupplyDate extends Composite
{
    /** @var CodeInList */
    protected $supplyDateRole;

    /** @var string */
    protected $date;

    public function setSupplyDateRole(string $code): void
    {
        $this->supplyDateRole = new CodeInList(CodeList166SupplyDateRole::class, $code);
    }

    public function getSupplyDateRole(): string
    {
        return $this->supplyDateRole ? $this->supplyDateRole->code() : '';
    }

    public function getSupplyDateRoleDesc(): string
    {
        return $this->supplyDateRole ? $this->supplyDateRole->desc() : '';
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