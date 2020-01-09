<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList9ProductClassificationType;

class ProductClassification extends Composite
{
    /** @var CodeInList */
    protected $productClassificationType;

    /** @var string */
    protected $productClassificationCode = '';

    public function setProductClassificationType(string $code): void
    {
        $this->productClassificationType = new CodeInList(CodeList9ProductClassificationType::class, $code);
    }

    public function getProductClassificationType(): string
    {
        return $this->productClassificationType ? $this->productClassificationType->code() : '';
    }

    public function getProductClassificationTypeDesc(): string
    {
        return $this->productClassificationType ? $this->productClassificationType->desc() : '';
    }

    public function setProductClassificationCode(string $value): void
    {
        $this->productClassificationCode = $value;
    }

    public function getProductClassificationCode(): string
    {
        return $this->productClassificationCode;
    }
}