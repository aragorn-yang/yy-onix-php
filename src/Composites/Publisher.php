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

    public function getPublishingRole(): string
    {
        return $this->publishingRole ? $this->publishingRole->getCode() : '';
    }

    public function getPublishingRoleDesc(): string
    {
        return $this->publishingRole ? $this->publishingRole->getDesc() : '';
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
}