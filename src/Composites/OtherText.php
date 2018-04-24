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

    protected const TYPE_OF_MAIN_DESC = '01';
    protected const TYPE_OF_SHORT_DESC = '02';
    protected const TYPE_OF_LONG_DESC = '03';
    protected const TYPE_OF_REVIEW_QUOTE = '08';

    public function getTextTypeCode(): string
    {
        return $this->textTypeCode ? $this->textTypeCode->code() : '';
    }

    public function getTextTypeCodeDesc(): string
    {
        return $this->textTypeCode ? $this->textTypeCode->desc() : '';
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

    public function isMainDesc(): bool
    {
        return (string)$this->textTypeCode === self::TYPE_OF_MAIN_DESC;
    }

    public function isShortDesc(): bool
    {
        return (string)$this->textTypeCode === self::TYPE_OF_SHORT_DESC;
    }

    public function isLongDesc(): bool
    {
        return (string)$this->textTypeCode === self::TYPE_OF_LONG_DESC;
    }

    public function isReviewQuote(): bool
    {
        return (string)$this->textTypeCode === self::TYPE_OF_REVIEW_QUOTE;
    }
}