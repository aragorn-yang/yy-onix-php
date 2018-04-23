<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList5ProductIdentifierType;

class ProductIdentifier extends Composite
{
    /** @var CodeInList */
    protected $productIDType;
    /** @var string */
    protected $IDValue = '';

    public const TYPE_OF_ISBN_10 = '02';

    public const TYPE_OF_ISBN_13 = '15';

    public function getProductIDType(): string
    {
        return $this->productIDType ? $this->productIDType->getCode() : '';
    }

    public function getProductIDTypeDesc(): string
    {
        return $this->productIDType ? $this->productIDType->getDesc() : '';
    }

    public function setProductIDType(string $code): void
    {
        $this->productIDType = new CodeInList(CodeList5ProductIdentifierType::class, $code);
    }

    public function isIsbn10(): bool
    {
        return (string)$this->productIDType === self::TYPE_OF_ISBN_10;
    }

    public function isIsbn13(): bool
    {
        return (string)$this->productIDType === self::TYPE_OF_ISBN_13;
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