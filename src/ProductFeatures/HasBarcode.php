<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList6BarcodeIndicator;

trait HasBarcode
{
    /** @var CodeInList */
    protected $barcode;

    public function getBarcode(): string
    {
        return $this->barcode ? $this->barcode->code() : '';
    }

    public function getBarcodeDesc(): string
    {
        return $this->barcode ? $this->barcode->desc() : '';
    }

    public function setBarcode(string $code): void
    {
        $this->barcode = new CodeInList(CodeList6BarcodeIndicator::class, $code);
    }
}