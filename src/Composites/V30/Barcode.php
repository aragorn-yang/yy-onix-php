<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList141BarcodeIndicator;

class Barcode extends Composite
{
    /** @var CodeInList */
    protected $barcodeType;

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
}