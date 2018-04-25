<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasEditionStatement
{
    /** @var string */
    protected $editionStatement = '';

    public function getEditionStatement(): string
    {
        return $this->editionStatement;
    }

    public function setEditionStatement(string $editionStatement): void
    {
        $this->editionStatement = $editionStatement;
    }
}