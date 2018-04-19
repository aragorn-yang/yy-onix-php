<?php

namespace AragornYang\Onix\Composites;

class ProductIdentifier extends Composite
{
    /** @var string */
    protected $productIDType = '';
    /** @var string */
    protected $IDValue = '';

    public function getProductIDType(): string
    {
        return $this->productIDType;
    }

    public function setProductIDType(string $productIDType): void
    {
        $this->productIDType = $productIDType;
    }

    public function isIsbn10(): bool
    {
        return (string)$this->productIDType === '02';
    }

    public function isIsbn13(): bool
    {
        return (string)$this->productIDType === '15';
    }

    public function getIDValue(): string
    {
        return $this->IDValue;
    }

    public function setIDValue(string $IDValue): void
    {
        $this->IDValue = $IDValue;
    }

}