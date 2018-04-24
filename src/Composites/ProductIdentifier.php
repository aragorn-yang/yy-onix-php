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

    protected const TYPE_OF_ISBN_10 = '02';
    protected const TYPE_OF_GTIN_13 = '03';
    protected const TYPE_OF_ISBN_13 = '15';

    public function getProductIDType(): string
    {
        return $this->productIDType ? $this->productIDType->code() : '';
    }

    public function getProductIDTypeDesc(): string
    {
        return $this->productIDType ? $this->productIDType->desc() : '';
    }

    public function setProductIDType(string $code): void
    {
        $this->productIDType = new CodeInList(CodeList5ProductIdentifierType::class, $code);
    }

    public function isISBN10(): bool
    {
        return (string)$this->productIDType === self::TYPE_OF_ISBN_10;
    }

    public function isISBN13(): bool
    {
        return (string)$this->productIDType === self::TYPE_OF_ISBN_13;
    }

    public function isGTIN13(): bool
    {
        return (string)$this->productIDType === self::TYPE_OF_GTIN_13;
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