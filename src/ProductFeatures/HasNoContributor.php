<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasNoContributor
{
    /** @var bool */
    protected $noContributor = false;

    public function getNoContributor(): bool
    {
        return $this->isNoContributor();
    }

    public function isNoContributor(): bool
    {
        return $this->noContributor;
    }

    public function setNoContributor(): void
    {
        $this->noContributor = true;
    }
}