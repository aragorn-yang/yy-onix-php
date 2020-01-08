<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList73WebsiteRole;

class Website extends Composite
{
    /** @var CodeInList */
    protected $websiteRole;

    /** @var string */
    protected $websiteDescription = '';

    /** @var string */
    protected $websiteLink = '';

    public function getWebsiteRole(): string
    {
        return $this->websiteRole ? $this->websiteRole->code() : '';
    }

    public function getWebsiteRoleDesc(): string
    {
        return $this->websiteRole ? $this->websiteRole->desc() : '';
    }

    public function setWebsiteRole(string $code): void
    {
        $this->websiteRole = new CodeInList(CodeList73WebsiteRole::class, $code);
    }

    public function getWebsiteDescription(): string
    {
        return $this->websiteDescription;
    }

    public function setWebsiteDescription(string $websiteDescription): void
    {
        $this->websiteDescription = $websiteDescription;
    }

    public function getWebsiteLink(): string
    {
        return $this->websiteLink;
    }

    public function setWebsiteLink(string $websiteLink): void
    {
        $this->websiteLink = $websiteLink;
    }
}