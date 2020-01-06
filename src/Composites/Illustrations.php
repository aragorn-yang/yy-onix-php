<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList25IllustrationAndOtherContentType;

class Illustrations extends Composite
{
    /** @var CodeInList */
    protected $illustrationType;

    /** @var integer */
    protected $number = 0;

    /** @var string */
    protected $illustrationTypeDescription = '';

    public function setNumber(string $value): void
    {
        $this->number = (int)$value;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setIllustrationType(string $code): void
    {
        $this->illustrationType = new CodeInList(CodeList25IllustrationAndOtherContentType::class, $code);
    }

    public function getIllustrationType(): string
    {
        return $this->illustrationType ? $this->illustrationType->code() : '';
    }

    public function getIllustrationTypeDesc(): string
    {
        return $this->illustrationType ? $this->illustrationType->desc() : '';
    }

    public function setIllustrationTypeDescription(string $value): void
    {
        $this->illustrationTypeDescription = $value;
    }

    public function getIllustrationTypeDescription(): string
    {
        return $this->illustrationTypeDescription;
    }
}