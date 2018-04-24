<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList13SeriesIdentifierType;

class SeriesIdentifier extends Composite
{
    /** @var CodeInList */
    protected $seriesIDType;
    /** @var string */
    protected $IDTypeName = '';
    /** @var string */
    protected $IDValue = '';

    public function getSeriesIDType(): string
    {
        return $this->seriesIDType ? $this->seriesIDType->code() : '';
    }

    public function getSeriesIDTypeDesc(): string
    {
        return $this->seriesIDType ? $this->seriesIDType->desc() : '';
    }

    public function setSeriesIDType(string $code): void
    {
        $this->seriesIDType = new CodeInList(CodeList13SeriesIdentifierType::class, $code);
    }

    public function getIDTypeName(): string
    {
        return $this->IDTypeName;
    }

    public function setIDTypeName(string $IDTypeName): SeriesIdentifier
    {
        $this->IDTypeName = $IDTypeName;
        return $this;
    }

    public function getIDValue(): string
    {
        return $this->IDValue;
    }

    public function setIDValue(string $IDValue): void
    {
        $this->IDValue = $IDValue;
    }
}