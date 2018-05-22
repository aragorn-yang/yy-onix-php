<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList44NameCodeType;
use AragornYang\Onix\CodeLists\CodeList45PublishingRole;

class Publisher extends Composite
{
    /** @var CodeInList */
    protected $publishingRole;
    /** @var CodeInList */
    protected $nameCodeType;
    /** @var string */
    protected $nameCodeTypeName = '';
    /** @var string */
    protected $nameCodeValue = '';
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

    public function getNameCodeType(): string
    {
        return $this->nameCodeType ? $this->nameCodeType->code() : '';
    }

    public function getNameCodeTypeDesc(): string
    {
        return $this->nameCodeType ? $this->nameCodeType->desc() : '';
    }

    public function setNameCodeType(string $code): void
    {
        $this->nameCodeType = new CodeInList(CodeList44NameCodeType::class, $code);
    }

    public function getPublisherName(): string
    {
        if ($this->publisherName) {
            return $this->publisherName;
        }
        return $this->nameCodeTypeName;
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

    public function getNameCodeTypeName(): string
    {
        return $this->nameCodeTypeName;
    }

    public function setNameCodeTypeName(string $nameCodeTypeName): void
    {
        $this->nameCodeTypeName = $nameCodeTypeName;
    }

    public function getNameCodeValue(): string
    {
        return $this->nameCodeValue;
    }

    public function setNameCodeValue(string $nameCodeValue): void
    {
        $this->nameCodeValue = $nameCodeValue;
    }
}