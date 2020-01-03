<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasCopyrightYears
{
    /** @var array */
    protected $copyrightYear = [];

    public function getCopyrightYear(): array
    {
        return $this->copyrightYear;
    }

    public function setCopyrightYear(string $copyrightYear): void
    {
        $this->copyrightYear[] = $copyrightYear;
    }
}