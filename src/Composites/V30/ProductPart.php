<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList150ProductForm;
use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;

class ProductPart extends Composite
{
    use HasProductIdentifiers;

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
        $this->productForm = new CodeInList(CodeList150ProductForm::class, $code);
    }
}