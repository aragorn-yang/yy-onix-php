<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasBICVersion
{
    /** @var string */
    protected $BICVersion = '';

    public function getBICVersion(): string
    {
        return $this->BICVersion;
    }

    public function setBICVersion(string $BICVersion): void
    {
        $this->BICVersion = $BICVersion;
    }
}