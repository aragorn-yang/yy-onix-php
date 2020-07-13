<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasBISACMainSubject
{
    /** @var string */
    protected $BISACMainSubject = '';

    public function getBISACMainSubject(): string
    {
        return $this->BISACMainSubject;
    }

    public function setBISACMainSubject(string $BISACMainSubject): void
    {
        $this->BISACMainSubject = $BISACMainSubject;
    }
}