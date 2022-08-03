<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList15TitleType;
use AragornYang\Onix\Composites\V30\TitleElement;

class TitleDetail extends Composite
{
    /** @var CodeInList */
    protected $titleType;

    /** @var array|TitleElement */
    protected $titleElements = [];

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

    public function setTitleElement(\SimpleXMLElement $xml): void
    {
        $this->titleElements[] = TitleElement::buildFromXml($xml, $this);
    }

    public function getTitleElements(): array
    {
        return $this->titleElements;
    }

    public function setTitleStatement($value): void
    {
        $this->titleStatement = $value->__toString();
    }

    public function getTitleStatement(): string
    {
        return $this->titleStatement;
    }
}