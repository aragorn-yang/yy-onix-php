<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList22LanguageRole;

class Language extends Composite
{
    /** @var CodeInList */
    protected $languageRole;
    /** @var string */
    protected $languageCode = '';

    const TYPE_OF_THE_LANG_OF_TEXT = '01';

    public function getLanguageRole(): string
    {
        return $this->languageRole ? $this->languageRole->getCode() : '';
    }

    public function getLanguageRoleDesc(): string
    {
        return $this->languageRole ? $this->languageRole->getDesc() : '';
    }

    public function setLanguageRole(string $code): void
    {
        $this->languageRole = new CodeInList(CodeList22LanguageRole::class, $code);
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
        return (string)$this->languageRole === self::TYPE_OF_THE_LANG_OF_TEXT;
    }
}