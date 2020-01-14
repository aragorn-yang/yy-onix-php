<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList22LanguageRole;
use AragornYang\Onix\ProductFeatures\HasLanguageCode;

class Language extends Composite
{
    use HasLanguageCode;

    /** @var CodeInList */
    protected $languageRole;

    protected const TYPE_OF_THE_LANG_OF_TEXT = '01';

    public function getLanguageRole(): string
    {
        return $this->languageRole ? $this->languageRole->code() : '';
    }

    public function getLanguageRoleDesc(): string
    {
        return $this->languageRole ? $this->languageRole->desc() : '';
    }

    public function setLanguageRole(string $code): void
    {
        $this->languageRole = new CodeInList(CodeList22LanguageRole::class, $code);
    }

    public function isTheLanguageOfText(): bool
    {
        return (string)$this->languageRole === self::TYPE_OF_THE_LANG_OF_TEXT;
    }
}