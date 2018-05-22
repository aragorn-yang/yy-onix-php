<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList79ProductFormFeatureType;

class ProductFormFeature extends Composite
{
    /** @var CodeInList */
    protected $productFormFeatureType;

    public function getProductFormFeatureType(): string
    {
        return $this->productFormFeatureType ? $this->productFormFeatureType->code() : '';
    }

    public function getProductFormFeatureTypeDesc(): string
    {
        return $this->productFormFeatureType ? $this->productFormFeatureType->desc() : '';
    }

    public function setProductFormFeatureType(string $code): void
    {
        $this->productFormFeatureType = new CodeInList(CodeList79ProductFormFeatureType::class, $code);
    }
}