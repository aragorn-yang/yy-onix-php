<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList80ProductPackagingType;

trait HasProductPackaging
{
    /** @var CodeInList */
    protected $productPackaging;

    public function getProductPackaging(): string
    {
        return $this->productPackaging ? $this->productPackaging[0]->code() : '';
    }

    public function getProductPackagingDesc(): string
    {
        return $this->productPackaging ? $this->productPackaging[0]->desc() : '';
    }

    public function setProductPackaging(string $code): void
    {
        $this->productPackaging[] = new CodeInList(CodeList80ProductPackagingType::class, $code);
    }
}