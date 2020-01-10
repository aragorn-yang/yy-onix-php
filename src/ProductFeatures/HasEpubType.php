<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList10EpublicationType;

trait HasEpubType
{
    /** @var CodeInList */
    protected $epubType;

    public function getEpubType(): string
    {
        return $this->epubType ? $this->epubType->code() : '';
    }

    public function getEpubTypeDesc(): string
    {
        return $this->epubType ? $this->epubType->desc() : '';
    }

    public function setEpubType(string $code): void
    {
        $this->epubType = new CodeInList(CodeList10EpublicationType::class, $code);
    }
}