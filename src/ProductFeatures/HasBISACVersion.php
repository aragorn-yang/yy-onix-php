<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasBISACVersion
{
    /** @var string */
    protected $BISACVersion = '';

    public function getBISACVersion(): string
    {
        return $this->BISACVersion;
    }

    public function setBISACVersion(string $BISACVersion): void
    {
        $this->BISACVersion = $BISACVersion;
    }
}