<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList81ProductContentType;

trait HasProductContentType
{
    /** @var CodeInList */
    protected $productContentType;

    public function getProductContentType(): string
    {
        return $this->productContentType ? $this->productContentType->code() : '';
    }

    public function getProductContentTypeDesc(): string
    {
        return $this->productContentType ? $this->productContentType->desc() : '';
    }

    public function setProductContentType(string $code): void
    {
        $this->productContentType = new CodeInList(CodeList81ProductContentType::class, $code);
    }
}