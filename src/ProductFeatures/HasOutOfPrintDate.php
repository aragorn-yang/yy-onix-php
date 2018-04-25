<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasOutOfPrintDate
{
    /**
     * @var string Date as year, month, day (YYYYMMDD)
     */
    protected $outOfPrintDate = '';

    public function getOutOfPrintDate(): string
    {
        return $this->outOfPrintDate;
    }

    public function setOutOfPrintDate(string $outOfPrintDate): void
    {
        $this->outOfPrintDate = $outOfPrintDate;
    }
}