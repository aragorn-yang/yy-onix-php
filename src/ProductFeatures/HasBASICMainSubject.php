<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasBASICMainSubject
{
    /** @var string */
    protected $BASICMainSubject = '';

    public function getBASICMainSubject(): string
    {
        return $this->BASICMainSubject;
    }

    public function setBASICMainSubject(string $BASICMainSubject): void
    {
        $this->BASICMainSubject = $BASICMainSubject;
    }
}