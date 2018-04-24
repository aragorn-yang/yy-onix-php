<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasNoEdition
{
    /** @var bool */
    protected $noEdition = false;

    public function getNoEdition(): bool
    {
        return $this->isNoEdition();
    }

    public function isNoEdition(): bool
    {
        return $this->noEdition;
    }

    public function setNoEdition(): void
    {
        $this->noEdition = true;
    }
}