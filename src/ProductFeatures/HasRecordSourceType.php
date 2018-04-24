<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList3RecordSourceType;

trait HasRecordSourceType
{
    /** @var CodeInList */
    protected $recordSourceType;

    public function getRecordSourceType(): string
    {
        return $this->recordSourceType ? $this->recordSourceType->code() : '';
    }

    public function getRecordSourceTypeDesc(): string
    {
        return $this->recordSourceType ? $this->recordSourceType->desc() : '';
    }

    public function setRecordSourceType(string $code): void
    {
        $this->recordSourceType = new CodeInList(CodeList3RecordSourceType::class, $code);
    }
}