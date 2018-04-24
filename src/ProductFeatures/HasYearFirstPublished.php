<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasYearFirstPublished
{
    /** @var string */
    protected $yearFirstPublished = '';

    public function getYearFirstPublished(): string
    {
        return $this->yearFirstPublished;
    }

    public function setYearFirstPublished(string $yearFirstPublished): void
    {
        $this->yearFirstPublished = $yearFirstPublished;
    }
}