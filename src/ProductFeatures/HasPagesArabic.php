<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasPagesArabic
{
    /** @var int */
    protected $pagesArabic = 0;

    public function getPagesArabic(): int
    {
        return $this->pagesArabic;
    }

    public function setPagesArabic(string $value): void
    {
        $this->pagesArabic = (int)$value;
    }
}