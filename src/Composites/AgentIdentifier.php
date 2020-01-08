<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList92SupplierIdentifierType;

class AgentIdentifier extends Composite
{
    /** @var CodeInList */
    protected $agentIDType;

    /** @var string */
    protected $IDValue = '';

    public function getAgentIDType(): string
    {
        return $this->agentIDType ? $this->agentIDType->code() : '';
    }

    public function getAgentIDTypeDesc(): string
    {
        return $this->agentIDType ? $this->agentIDType->desc() : '';
    }

    public function setAgentIDType(string $code): void
    {
        $this->agentIDType = new CodeInList(CodeList92SupplierIdentifierType::class, $code);
    }

    public function setIDValue(string $value): void
    {
        $this->IDValue = $value;
    }

    public function getIDValue(): string
    {
        return $this->IDValue;
    }
}