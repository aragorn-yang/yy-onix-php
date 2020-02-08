<?php

namespace AragornYang\Onix\Composites;

class CopyrightOwner extends Composite
{
    /** @var string */
    protected $personName = '';

    /** @var string */
    protected $corporateName = '';

    public function setPersonName(string $value): void
    {
        $this->personName = $value;
    }

    public function getPersonName(): string
    {
        return $this->personName;
    }

    public function setCorporateName(string $value): void
    {
        $this->corporateName = $value;
    }

    public function getCorporateName(): string
    {
        return $this->corporateName;
    }
}