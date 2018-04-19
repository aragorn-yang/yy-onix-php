<?php

namespace AragornYang\Onix\Composites;

class Title extends Composite
{
    /** @var string */
    protected $titleType = '';
    /** @var string */
    protected $titleText = '';

    protected const DISTINCTIVE_TITLE = '01';

    public function getTitleType(): string
    {
        return $this->titleType;
    }

    public function setTitleType(string $titleType): void
    {
        $this->titleType = $titleType;
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
        return $this->titleType === static::DISTINCTIVE_TITLE;
    }
}