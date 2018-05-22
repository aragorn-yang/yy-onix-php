<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList78ProductFormDetail;

trait HasProductFormDetail
{
    /** @var CodeInList */
    protected $productFormDetail;

    public function getProductFormDetail(): string
    {
        return $this->productFormDetail ? $this->productFormDetail->code() : '';
    }

    public function getProductFormDetailDesc(): string
    {
        return $this->productFormDetail ? $this->productFormDetail->desc() : '';
    }

    public function setProductFormDetail(string $code): void
    {
        $this->productFormDetail = new CodeInList(CodeList78ProductFormDetail::class, $code);
    }
}