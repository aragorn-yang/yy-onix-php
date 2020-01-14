<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasPagesRoman
{
    /** @var string */
    protected $pagesRoman = '';

    public function getPagesRoman(): string
    {
        return $this->pagesRoman;
    }

    public function setPagesRoman(string $value): void
    {
        $this->pagesRoman = $value;
    }
}