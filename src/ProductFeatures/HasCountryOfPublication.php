<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;

trait HasCountryOfPublication
{
    /** @var CodeInList */
    protected $countryOfPublication;

    public function getCountryOfPublication(): string
    {
        return $this->countryOfPublication ? $this->countryOfPublication->code() : '';
    }

    public function getCountryOfPublicationDesc(): string
    {
        return $this->countryOfPublication ? $this->countryOfPublication->desc() : '';
    }

    public function setCountryOfPublication(string $code): void
    {
        $this->countryOfPublication = new CodeInList(CodeList91CountryCodeISO31661::class, $code);
    }
}