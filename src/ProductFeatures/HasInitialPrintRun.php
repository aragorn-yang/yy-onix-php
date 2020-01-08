<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasInitialPrintRun
{
    /** @var string */
    protected $initialPrintRun = '';

    public function getInitialPrintRun(): string
    {
        return $this->initialPrintRun;
    }

    public function setInitialPrintRun(string $value): void
    {
        $this->initialPrintRun = $value;
    }
}