<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasPlaceAsSubjects
{
    /** @var [] */
    protected $placeAsSubjects = [];

    public function getPlaceAsSubject(): array
    {
        return $this->placeAsSubjects;
    }

    public function setPlaceAsSubject(string $value): void
    {
        $this->placeAsSubjects[] = $value;
    }
}