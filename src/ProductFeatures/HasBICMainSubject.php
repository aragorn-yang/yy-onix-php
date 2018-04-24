<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasBICMainSubject
{
    /** @var string */
    protected $BICMainSubject = '';

    public function getBICMainSubject(): string
    {
        return $this->BICMainSubject;
    }

    public function setBICMainSubject(string $BICMainSubject): void
    {
        $this->BICMainSubject = $BICMainSubject;
    }
}