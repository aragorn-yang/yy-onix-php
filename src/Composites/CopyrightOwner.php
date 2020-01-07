<?php

namespace AragornYang\Onix\Composites;

class CopyrightOwner extends Composite
{
    /** @var string */
    protected $personName = '';

    public function setPersonName(string $value): void
    {
        $this->personName = $value;
    }

    public function getPersonName(): string
    {
        return $this->personName;
    }
}