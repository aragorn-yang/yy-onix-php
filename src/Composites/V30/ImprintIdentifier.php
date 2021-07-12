<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList44NameCodeType;

class ImprintIdentifier extends Composite
{
    /** @var CodeInList */
    protected $imprintIDType;

    /** @var string */
    protected $IDTypeName = '';

    /** @var string */
    protected $IDValue = '';

    public function setImprintIDType(string $code): void
    {
        $this->imprintIDType = new CodeInList(CodeList44NameCodeType::class, $code);
    }

    public function getImprintIDType(): string
    {
        return $this->imprintIDType ? $this->imprintIDType->code() : '';
    }

    public function getImprintIDTypeDesc(): string
    {
        return $this->imprintIDType ? $this->imprintIDType->desc() : '';
    }

    public function setIDTypeName(string $value): void
    {
        $this->IDTypeName = $value;
    }

    public function getIDTypeName(): string
    {
        return $this->IDTypeName;
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