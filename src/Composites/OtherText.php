<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList33OtherTextType;

class OtherText extends Composite
{
    /** @var CodeInList */
    protected $textTypeCode;
    /** @var string */
    protected $text = '';

    public const TYPE_OF_MAIN_DESC = '01';
    public const TYPE_OF_REVIEW_QUOTE = '08';

    public function getTextTypeCode(): string
    {
        return $this->textTypeCode ? $this->textTypeCode->getCode() : '';
    }

    public function getTextTypeCodeDesc(): string
    {
        return $this->textTypeCode ? $this->textTypeCode->getDesc() : '';
    }

    public function setTextTypeCode(string $code): void
    {
        $this->textTypeCode = new CodeInList(CodeList33OtherTextType::class, $code);
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
        return (string)$this->textTypeCode === self::TYPE_OF_MAIN_DESC;
    }

    public function isReviewQuote(): bool
    {
        return (string)$this->textTypeCode === self::TYPE_OF_REVIEW_QUOTE;
    }
}