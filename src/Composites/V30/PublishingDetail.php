<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\ProductFeatures\HasCopyrightStatements;
use AragornYang\Onix\ProductFeatures\HasImprints;
use AragornYang\Onix\ProductFeatures\HasPublishers;
use AragornYang\Onix\ProductFeatures\HasPublishingStatus;
use AragornYang\Onix\Composites\V30\PublishingDate;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;

class PublishingDetail extends Composite
{
    use
        HasCopyrightStatements,
        HasImprints,
        HasPublishers,
        HasPublishingStatus;

    /** @var CodeInList */
    protected $countryOfPublication;

    /** @var PublishingDate[] */
    protected $publishingDate;

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

    public function setPublishingDate(\SimpleXMLElement $xml): void
    {
        $this->publishingDate[] = PublishingDate::buildFromXml($xml, $this);
    }

    public function getPublishingDate(): array
    {
        return $this->publishingDate;
    }
}