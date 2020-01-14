<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList11EpublicationFormat;

trait HasEpubSource
{
    /** @var CodeInList */
    protected $epubSource;

    public function getEpubSource(): string
    {
        return $this->epubSource ? $this->epubSource->code() : '';
    }

    public function getEpubSourceDesc(): string
    {
        return $this->epubSource ? $this->epubSource->desc() : '';
    }

    public function setEpubSource(string $code): void
    {
        $this->epubSource = new CodeInList(CodeList11EpublicationFormat::class, $code);
    }
}