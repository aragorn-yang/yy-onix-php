<?php

namespace AragornYang\Onix\Composites;

class Language extends Composite
{
    /** @var string */
    protected $languageRole = '';
    /** @var string */
    protected $languageCode = '';

    public function getLanguageRole(): string
    {
        return $this->languageRole;
    }

    public function setLanguageRole(string $languageRole): void
    {
        $this->languageRole = $languageRole;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }

    public function isTheLanguageOfText(): bool
    {
        return $this->languageRole === '01';
    }
}