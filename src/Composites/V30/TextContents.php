<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList153TextType;
use AragornYang\Onix\CodeLists\CodeList154ContentAudience;

class TextContents extends Composite
{
    /** @var CodeInList */
    protected $textType;

    /** @var CodeInList */
    protected $contentAudience;

    /** @var string */
    protected $text = '';

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

    public function setContentAudience(string $code): void
    {
        $this->contentAudience = new CodeInList(CodeList154ContentAudience::class, $code);
    }

    public function getContentAudience(): string
    {
        return $this->contentAudience ? $this->contentAudience->code() : '';
    }

    public function getContentAudienceDesc(): string
    {
        return $this->contentAudience ? $this->contentAudience->desc() : '';
    }

    public function setText(string $value): void
    {
        $this->text = $value;
    }

    public function getText(): string
    {
        return $this->text;
    }
}