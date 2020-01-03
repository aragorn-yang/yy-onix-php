<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList33OtherTextType;
use AragornYang\Onix\CodeLists\CodeList34TextFormat;
use SimpleXMLElement;

class OtherText extends Composite
{
    /** @var CodeInList */
    protected $textTypeCode;
    /** @var CodeInList */
    protected $textFormat;
    /** @var string */
    protected $text = '';
    /** @var string */
    protected $textSourceTitle = '';

    /** @var string */
    protected $textAuthor = '';

    /** @var string */
    protected $textPublicationDate = '';

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

    public function getTextFormat(): string
    {
        return $this->textFormat ? $this->textFormat->code() : '';
    }

    public function getTextFormatDesc(): string
    {
        return $this->textFormat ? $this->textFormat->desc() : '';
    }

    public function setTextFormat(string $code): void
    {
        $this->textFormat = new CodeInList(CodeList34TextFormat::class, $code);
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(SimpleXMLElement $text): void
    {
        if ($text['textformat']) {
            $this->setTextFormat($text['textformat']);
        }
        $this->text = (string)$text;
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

    public function getTextSourceTitle(): string
    {
        return $this->textSourceTitle;
    }

    public function setTextSourceTitle(string $textSourceTitle): void
    {
        $this->textSourceTitle = $textSourceTitle;
    }

    public function setTextAuthor(string $textAuthor): void
    {
        $this->textAuthor = $textAuthor;
    }

    public function getTextAuthor(): string
    {
        return $this->textAuthor;
    }

    public function setTextPublicationDate(string $textPublicationDate): void
    {
        $this->textPublicationDate = $textPublicationDate;
    }

    public function getTextPublicationDate(): string
    {
        return $this->textPublicationDate;
    }
}