<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasEditionVersionNumber
{
    /** @var int */
    protected $editionVersionNumber = 0;

    public function getEditionVersionNumber(): int
    {
        return $this->editionVersionNumber;
    }

    public function setEditionVersionNumber(string $value): void
    {
        $this->editionVersionNumber = (int)$value;
    }
}