<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasNumberOfPieces
{
    /** @var string */
    protected $numberOfPieces = '';

    public function getNumberOfPieces(): string
    {
        return $this->numberOfPieces;
    }

    public function setNumberOfPieces(string $value): void
    {
        $this->numberOfPieces = $value;
    }
}