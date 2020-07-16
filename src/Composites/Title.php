<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList15TitleType;

/**
 * @see PR.7 Title in Onix Spec 2.1
 *
 * Class Title
 * @package AragornYang\Onix\Composites
 */
class Title extends Composite
{
    /** @var CodeInList */
    protected $titleType;
    /** @var string */
    protected $titleText = '';
    /** @var string */
    protected $titlePrefix = '';
    /** @var string */
    protected $titleWithoutPrefix = '';
    /** @var string */
    protected $subtitle = '';

    protected const TYPE_OF_DISTINCTIVE_TITLE = '01';

    public function getTitleType(): string
    {
        return $this->titleType ? $this->titleType->code() : '';
    }

    public function getTitleTypeDesc(): string
    {
        return $this->titleType ? $this->titleType->desc() : '';
    }

    public function setTitleType(string $code): void
    {
        $this->titleType = new CodeInList(CodeList15TitleType::class, $code);
    }

    public function isDistinctiveTitle(): bool
    {
        return (string)$this->titleType === self::TYPE_OF_DISTINCTIVE_TITLE;
    }

    public function getFullTitle(): string
    {
        return $this->titleText . ($this->subtitle ? ": {$this->subtitle}" : '');
    }

    public function getTitleText(): string
    {
        return $this->titleText;
    }

    public function setTitleText(string $titleText): void
    {
        $this->titleText = $titleText;
    }

    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle)
    {
        $this->subtitle = $subtitle;
    }

    public function setTitlePrefix(string $titlePrefix): void
    {
        $this->titlePrefix = $titlePrefix;
    }

    public function getTitlePrefix(): string
    {
        return $this->titlePrefix;
    }

    public function setTitleWithoutPrefix(string $titleWithoutPrefix): void
    {
        $this->titleWithoutPrefix = $titleWithoutPrefix;
    }

    public function getTitleWithoutPrefix(): string
    {
        return $this->titleWithoutPrefix;
    }
}