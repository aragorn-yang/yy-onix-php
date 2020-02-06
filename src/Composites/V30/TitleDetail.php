<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList15TitleType;

class TitleDetail extends Composite
{
    /** @var CodeInList */
    protected $titleType;

    public function setTitleType(string $code): void
    {
        $this->titleType = new CodeInList(CodeList15TitleType::class, $code);
    }

    public function getTitleType(): string
    {
        return $this->titleType ? $this->titleType->code() : '';
    }

    public function getTitleTypeDesc(): string
    {
        return $this->titleType ? $this->titleType->desc() : '';
    }
}