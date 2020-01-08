<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\ProductFeatures\HasProductForm;
use AragornYang\Onix\ProductFeatures\HasProductFormDescription;
use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;
use AragornYang\Onix\ProductFeatures\HasNumberOfPieces;
use AragornYang\Onix\CodeLists\CodeList78ProductFormDetail;

class ContainedItem extends Composite
{
    use HasProductForm, HasProductFormDescription, HasProductIdentifiers, HasNumberOfPieces;
    protected $itemQuantity = 0;

    /** @var CodeInList */
    protected $productFormDetail;

    public function getItemQuantity(): int
    {
        return $this->itemQuantity;
    }

    public function setItemQuantity(string $itemQuantity): void
    {
        $this->itemQuantity = (int)$itemQuantity;
    }

    public function setProductFormDetail(string $code): void
    {
        $this->productFormDetail = new CodeInList(CodeList78ProductFormDetail::class, $code);
    }

    public function getProductFormDetail(): string
    {
        return $this->productFormDetail ? $this->productFormDetail->code() : '';
    }

    public function getProductFormDetailDesc(): string
    {
        return $this->productFormDetail ? $this->productFormDetail->desc() : '';
    }
}