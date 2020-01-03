<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList23ExtentType;
use AragornYang\Onix\CodeLists\CodeList24ExtentUnit;

class Extent extends Composite
{
    /** @var CodeInList */
    protected $extentType;

    /** @var CodeInList */
    protected $extentUnit;

    /** @var string */
    protected $extentValue;

    public function setExtentType(string $code): void
    {
        $this->extentType = new CodeInList(CodeList23ExtentType::class, $code);
    }

    public function getExtentType()
    {
        return $this->extentType ? $this->extentType->code() : '';
    }

    public function getExtentTypeDesc()
    {
        return $this->extentType ? $this->extentType->desc() : '';
    }

    public function setExtentUnit(string $code): void
    {
        $this->extentUnit = new CodeInList(CodeList24ExtentUnit::class, $code);
    }

    public function getExtentUnit(): string
    {
        return $this->extentUnit ? $this->extentUnit->code() : '';
    }

    public function getExtentUnitDesc(): string
    {
        return $this->extentUnit ? $this->extentUnit->desc() : '';
    }

    public function setExtentValue(string $value): void
    {
        $this->extentValue = $value;
    }

    public function getExtentValue(): string
    {
        return $this->extentValue;
    }
}