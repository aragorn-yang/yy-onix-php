<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasBASICVersion
{
    /** @var string */
    protected $BASICVersion = '';

    public function getBASICVersion(): string
    {
        return $this->BASICVersion;
    }

    public function setBASICVersion(string $BASICVersion): void
    {
        $this->BASICVersion = $BASICVersion;
    }
}