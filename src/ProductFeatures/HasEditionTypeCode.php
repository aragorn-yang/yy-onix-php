<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList21EditionTypeCode;

trait HasEditionTypeCode
{
    /** @var CodeInList */
    protected $editionTypeCode;

    public function getEditionTypeCode(): string
    {
        return $this->editionTypeCode ? $this->editionTypeCode->getCode() : '';
    }

    public function getEditionTypeCodeDesc(): string
    {
        return $this->editionTypeCode ? $this->editionTypeCode->getDesc() : '';
    }

    public function setEditionTypeCode(string $code): void
    {
        $this->editionTypeCode = new CodeInList(CodeList21EditionTypeCode::class, $code);
    }
}