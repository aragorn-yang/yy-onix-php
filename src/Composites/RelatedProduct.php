<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList51ProductRelation;
use AragornYang\Onix\ProductFeatures\HasProductForm;
use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;

class RelatedProduct extends Composite
{
    use HasProductForm, HasProductIdentifiers;
    /** @var CodeInList */
    protected $relationCode;

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
}