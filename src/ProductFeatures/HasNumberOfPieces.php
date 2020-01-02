<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasNumberOfPieces
{
    /** @var int */
    protected $numberOfPieces = 0;

    public function getNumberOfPieces(): int
    {
        return $this->numberOfPieces;
    }

    public function setNumberOfPieces(string $value): void
    {
        $this->numberOfPieces = (int)$value;
    }
}