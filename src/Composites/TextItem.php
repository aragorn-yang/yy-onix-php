<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList42TextItemType;

class TextItem extends Composite
{
    /** @var CodeInList */
    protected $textItemType;

    public function getTextItemType(): string
    {
        return $this->textItemType ? $this->textItemType->code() : '';
    }

    public function getTextItemTypeDesc(): string
    {
        return $this->textItemType ? $this->textItemType->desc() : '';
    }

    public function setTextItemType(string $code): void
    {
        $this->textItemType = new CodeInList(CodeList42TextItemType::class, $code);
    }

}