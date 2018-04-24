<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList7ProductForm;

trait HasProductForm
{
    /** @var CodeInList */
    protected $productForm;

    public function getProductForm(): string
    {
        return $this->productForm ? $this->productForm->code() : '';
    }

    public function getProductFormDesc(): string
    {
        return $this->productForm ? $this->productForm->desc() : '';
    }

    public function setProductForm(string $code): void
    {
        $this->productForm = new CodeInList(CodeList7ProductForm::class, $code);
    }
}