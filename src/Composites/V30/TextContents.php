<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList153TextType;

class TextContents extends Composite
{
    /** @var CodeInList */
    protected $textType;

    public function setTextType(string $code): void
    {
        $this->textType = new CodeInList(CodeList153TextType::class, $code);
    }

    public function getTextType(): string
    {
        return $this->textType ? $this->textType->code() : '';
    }

    public function getTextTypeDesc(): string
    {
        return $this->textType ? $this->textType->desc() : '';
    }
}