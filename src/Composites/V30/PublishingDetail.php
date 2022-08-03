<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList46SalesRightsType;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;
use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\ProductFeatures\HasCopyrightStatements;
use AragornYang\Onix\ProductFeatures\HasImprints;
use AragornYang\Onix\ProductFeatures\HasPublishers;
use AragornYang\Onix\ProductFeatures\HasPublishingStatus;
use AragornYang\Onix\ProductFeatures\HasSaleRights;
use SimpleXMLElement;

class PublishingDetail extends Composite
{
    use
        HasCopyrightStatements,
        HasImprints,
        HasPublishers,
        HasPublishingStatus,
        HasSaleRights;

    /** @var CodeInList */
    protected $countryOfPublication;

    /** @var PublishingDate[] */
    protected $publishingDate;

    /** @var CodeInList */
    protected $ROWSalesRightsType;

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

    public function setPublishingDate(SimpleXMLElement $xml): void
    {
        $this->publishingDate[] = PublishingDate::buildFromXml($xml, $this);
    }

    public function getPublishingDate(): array
    {
        return $this->publishingDate;
    }

    public function getPublicationDate(): ?PublishingDate
    {
        foreach ($this->getPublishingDate() as $publishingDate) {
            if ('01' !== $publishingDate->getPublishingDateRole()) {
                continue;
            }

            return $publishingDate;
        }

        return null;
    }

    public function getFirstPublicationDate(): ?PublishingDate
    {
        foreach ($this->getPublishingDate() as $publishingDate) {
            if ('11' !== $publishingDate->getPublishingDateRole()) {
                continue;
            }

            return $publishingDate;
        }

        return null;
    }

    public function getFirstPublicationDateString(): string
    {
        return $this->getFirstPublicationDate()->getDate();
    }

    public function getPublicationDateString(): string
    {
        return $this->getPublicationDate()->getDate();
    }

    public function getPublicationDateRoleDesc(): string
    {
        return $this->getPublicationDate()->getPublishingDateRoleDesc();
    }

    public function setROWSalesRightsType(string $code): void
    {
        $this->ROWSalesRightsType = new CodeInList(CodeList46SalesRightsType::class, $code);
    }

    public function getROWSalesRightsType(): string
    {
        return $this->ROWSalesRightsType ? $this->ROWSalesRightsType->code() : '';
    }

    public function getROWSalesRightsTypeDesc(): string
    {
        return $this->ROWSalesRightsType ? $this->ROWSalesRightsType->desc() : '';
    }
}
