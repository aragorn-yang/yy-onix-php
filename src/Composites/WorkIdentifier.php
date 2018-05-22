<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList16WorkIdentifierType;

class WorkIdentifier extends Composite
{
    /** @var CodeInList */
    protected $workIDType;
    /** @var string */
    protected $IDValue = '';

    public function getWorkIDType(): string
    {
        return $this->workIDType ? $this->workIDType->code() : '';
    }

    public function getWorkIDTypeDesc(): string
    {
        return $this->workIDType ? $this->workIDType->desc() : '';
    }

    public function setWorkIDType(string $code): void
    {
        $this->workIDType = new CodeInList(CodeList16WorkIdentifierType::class, $code);
    }

    public function getIDValue(): string
    {
        return $this->IDValue;
    }

    public function setIDValue(string $IDValue): void
    {
        $this->IDValue = $IDValue;
    }
}