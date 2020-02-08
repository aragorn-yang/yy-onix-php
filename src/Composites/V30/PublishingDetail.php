<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\ProductFeatures\HasImprints;
use AragornYang\Onix\ProductFeatures\HasPublishers;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;

class PublishingDetail extends Composite
{
    use
        HasImprints,
        HasPublishers;

    /** @var CodeInList */
    protected $countryOfPublication;

    public function setCountryOfPublication(string $code): void
    {
        $this->countryOfPublication = new CodeInList(CodeList91CountryCodeISO31661::class, $code);
    }

    public function getCountryOfPublication(): string
    {
        return $this->countryOfPublication ? $this->countryOfPublication->code() : '';
    }

    public function getCountryOfPublicationDesc(): string
    {
        return $this->countryOfPublication ? $this->countryOfPublication->desc() : '';
    }
}