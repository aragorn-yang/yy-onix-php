<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasEditionNumber
{
    /** @var string */
    protected $editionNumber = '';

    public function getEditionNumber(): string
    {
        return $this->editionNumber;
    }

    public function setEditionNumber(string $editionNumber): void
    {
        $this->editionNumber = $editionNumber;
    }
}