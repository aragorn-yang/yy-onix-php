<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasNumberOfIllustrations
{
    /** @var integer */
    protected $numberOfIllustrations = 0;

    public function getNumberOfIllustrations(): int
    {
        return $this->numberOfIllustrations;
    }

    public function setNumberOfIllustrations(string $value): void
    {
        $this->numberOfIllustrations = (int)$value;
    }
}