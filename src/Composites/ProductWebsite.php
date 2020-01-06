<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList73WebsiteRole;

class ProductWebsite extends Composite
{
    /** @var CodeInList */
    protected $websiteRole;

    /** @var string */
    protected $ProductWebsiteDescription;

    /** @var string */
    protected $productWebsiteLink;

    public function setWebsiteRole(string $code)
    {
        $this->websiteRole = new CodeInList(CodeList73WebsiteRole::class, $code);
    }

    public function getWebsiteRole()
    {
        return $this->websiteRole ? $this->websiteRole->code() : '';
    }

    public function getWebsiteRoleDesc()
    {
        return $this->websiteRole ? $this->websiteRole->desc() : '';
    }

    public function setProductWebsiteDescription(string $value): void
    {
        $this->productWebsiteDescription = $value;
    }

    public function getProductWebsiteDescription(): string
    {
        return $this->productWebsiteDescription;
    }

    public function setProductWebsiteLink(string $value): void
    {
        $this->productWebsiteLink = $value;
    }

    public function getProductWebsiteLink(): string
    {
        return $this->productWebsiteLink;
    }
}