<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList141BarcodeIndicator;
use AragornYang\Onix\CodeLists\CodeList142PositionOnProduct;

class Barcode extends Composite
{
    /** @var CodeInList */
    protected $barcodeType;

    /** @var CodeInList */
    protected $positionOnProduct;

    public function setBarcodeType(string $code): void
    {
        $this->barcodeType = new CodeInList(CodeList141BarcodeIndicator::class, $code);
    }

    public function getBarcodeType(): string
    {
        return $this->barcodeType ? $this->barcodeType->code() : '';
    }

    public function getBarcodeTypeDesc(): string
    {
        return $this->barcodeType ? $this->barcodeType->desc() : '';
    }

    public function setPositionOnProduct(string $code): void
    {
        $this->positionOnProduct = new CodeInList(CodeList142PositionOnProduct::class, $code);
    }

    public function getPositionOnProduct(): string
    {
        return $this->positionOnProduct ? $this->positionOnProduct->code() : '';
    }

    public function getPositionOnProductDesc(): string
    {
        return $this->positionOnProduct ? $this->positionOnProduct->desc() : '';
    }
}