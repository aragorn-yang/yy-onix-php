<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasIllustrationsNote
{
    /** @var string */
    protected $illustrationsNote = '';

    public function getIllustrationsNote(): string
    {
        return $this->illustrationsNote;
    }

    public function setIllustrationsNote(string $illustrationsNote): void
    {
        $this->illustrationsNote = $illustrationsNote;
    }
}