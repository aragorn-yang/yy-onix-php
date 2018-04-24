<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList28AudienceCode;

trait HasAudienceCode
{
    /** @var CodeInList */
    protected $audienceCode;

    public function getAudienceCode(): string
    {
        return $this->audienceCode ? $this->audienceCode->getCode() : '';
    }

    public function setAudienceCode(string $code): void
    {
        $this->audienceCode = new CodeInList(CodeList28AudienceCode::class, $code);
    }
}