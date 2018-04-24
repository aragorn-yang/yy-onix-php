<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasPublicationDate
{
    /** @var string */
    protected $publicationDate = '';

    public function getPublicationDate(): string
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(string $publicationDate): void
    {
        $this->publicationDate = $publicationDate;
    }
}