<?php

namespace AragornYang\Onix\Composites;

class Publisher extends Composite
{
    /** @var string */
    protected $publishingRole = '';
    /** @var string */
    protected $publisherName = '';

    public function getPublishingRole(): string
    {
        return $this->publishingRole;
    }

    public function setPublishingRole(string $publishingRole): void
    {
        $this->publishingRole = $publishingRole;
    }

    public function getPublisherName(): string
    {
        return $this->publisherName;
    }

    public function setPublisherName(string $publisherName): void
    {
        $this->publisherName = $publisherName;
    }
}