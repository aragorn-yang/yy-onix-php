<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasNoSeries
{
    /** @var bool */
    protected $noSeries = false;

    public function getNoSeries(): bool
    {
        return $this->isNoSeries();
    }

    public function isNoSeries(): bool
    {
        return $this->noSeries;
    }

    public function setNoSeries(): void
    {
        $this->noSeries = true;
    }
}