<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList44NameCodeType;

class ImprintIdentifier extends Composite
{
    /** @var CodeInList */
    protected $imprintIDType;

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
}