<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList45PublishingRole;

class Publisher extends Composite
{
    /** @var CodeInList */
    protected $publishingRole;
    /** @var string */
    protected $publisherName = '';
    /** @var array|Website[] */
    protected $websites = [];

    public function getPublishingRole(): string
    {
        return $this->publishingRole ? $this->publishingRole->code() : '';
    }

    public function getPublishingRoleDesc(): string
    {
        return $this->publishingRole ? $this->publishingRole->desc() : '';
    }

    public function setPublishingRole(string $code): void
    {
        $this->publishingRole = new CodeInList(CodeList45PublishingRole::class, $code);
    }

    public function getPublisherName(): string
    {
        return $this->publisherName;
    }

    public function setPublisherName(string $publisherName): void
    {
        $this->publisherName = $publisherName;
    }

    /**
     * @return Website[]
     */
    public function getWebsites(): array
    {
        return $this->websites;
    }

    public function setWebsite(\SimpleXMLElement $xml): void
    {
        $this->websites[] = Website::buildFromXml($xml, $this);
    }
}