<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList51ProductRelation;
use AragornYang\Onix\ProductFeatures\HasProductForm;
use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;
use AragornYang\Onix\CodeLists\CodeList10EpublicationType;

class RelatedProduct extends Composite
{
    use HasProductForm, HasProductIdentifiers;

    /** @var CodeInList */
    protected $relationCode;

    /** @var CodeInList */
    protected $epubType;

    public function getRelationCode(): string
    {
        return $this->relationCode ? $this->relationCode->code() : '';
    }

    public function getRelationCodeDesc(): string
    {
        return $this->relationCode ? $this->relationCode->desc() : '';
    }

    public function setRelationCode(string $code): void
    {
        $this->relationCode = new CodeInList(CodeList51ProductRelation::class, $code);
    }

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