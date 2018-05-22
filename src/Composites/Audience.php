<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList29AudienceCodeType;

class Audience extends Composite
{
    /** @var CodeInList */
    protected $audienceCodeType;
    /** @var string */
    protected $audienceCodeValue = '';

    public function getAudienceCodeType(): string
    {
        return $this->audienceCodeType ? $this->audienceCodeType->code() : '';
    }

    public function getAudienceCodeTypeDesc(): string
    {
        return $this->audienceCodeType ? $this->audienceCodeType->desc() : '';
    }

    public function setAudienceCodeType(string $code): void
    {
        $this->audienceCodeType = new CodeInList(CodeList29AudienceCodeType::class, $code);
    }

    public function getAudienceCodeValue(): string
    {
        return $this->audienceCodeValue;
    }

    public function setAudienceCodeValue(string $audienceCodeValue): void
    {
        $this->audienceCodeValue = $audienceCodeValue;
    }
}