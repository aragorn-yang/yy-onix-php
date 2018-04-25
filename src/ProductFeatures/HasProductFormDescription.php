<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasProductFormDescription
{
    protected $productFormDescription = '';

    public function getProductFormDescription(): string
    {
        return $this->productFormDescription;
    }

    public function setProductFormDescription(string $productFormDescription): void
    {
        $this->productFormDescription = $productFormDescription;
    }
}