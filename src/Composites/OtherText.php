<?php

namespace AragornYang\Onix\Composites;

class OtherText extends Composite
{
    /** @var string */
    protected $textTypeCode = '';
    /** @var string */
    protected $text = '';

    public function getTextTypeCode(): string
    {
        return $this->textTypeCode;
    }

    public function setTextTypeCode(string $textTypeCode): void
    {
        $this->textTypeCode = $textTypeCode;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function isMainDescription(): bool
    {
        return $this->textTypeCode === '01';
    }

    public function isReviewQuote(): bool
    {
        return $this->textTypeCode === '08';
    }
}