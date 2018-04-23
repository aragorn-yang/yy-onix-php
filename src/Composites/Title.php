<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList15TitleType;

class Title extends Composite
{
    /** @var CodeInList */
    protected $titleType;
    /** @var string */
    protected $titleText = '';

    protected const TYPE_OF_DISTINCTIVE_TITLE = '01';

    public function getTitleType(): string
    {
        return $this->titleType ? $this->titleType->getCode() : '';
    }

    public function getTitleTypeDesc(): string
    {
        return $this->titleType ? $this->titleType->getDesc() : '';
    }

    public function setTitleType(string $code): void
    {
        $this->titleType = new CodeInList(CodeList15TitleType::class, $code);
    }

    public function getTitleText(): string
    {
        return $this->titleText;
    }

    public function setTitleText(string $titleText): void
    {
        $this->titleText = $titleText;
    }

    public function isDistinctiveTitle(): bool
    {
        return (string)$this->titleType === self::TYPE_OF_DISTINCTIVE_TITLE;
    }
}