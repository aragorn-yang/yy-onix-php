<?php

namespace AragornYang\Onix\Composites;

class ProfessionalAffiliation extends Composite
{
    /** @var string */
    protected $professionalPosition = '';
    /** @var string */
    protected $affiliation = '';

    public function getProfessionalPosition(): string
    {
        return $this->professionalPosition;
    }

    public function setProfessionalPosition(string $professionalPosition): void
    {
        $this->professionalPosition = $professionalPosition;
    }

    public function getAffiliation(): string
    {
        return $this->affiliation;
    }

    public function setAffiliation(string $affiliation): void
    {
        $this->affiliation = $affiliation;
    }
}