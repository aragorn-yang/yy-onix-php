<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasCityOfPublication
{
    /** @var string */
    protected $cityOfPublication = '';

    public function getCityOfPublication(): string
    {
        return $this->cityOfPublication;
    }

    public function setCityOfPublication(string $cityOfPublication): void
    {
        $this->cityOfPublication = $cityOfPublication;
    }
}