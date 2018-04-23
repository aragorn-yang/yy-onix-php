<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList48MeasureType;

class Measure extends Composite
{
    /** @var CodeInList */
    protected $measureTypeCode;
    /** @var float */
    protected $measurement = 0.0;
    /** @var string */
    protected $measureUnitCode = '';

    public const TYPE_OF_HEIGHT = '01';

    public const TYPE_OF_WIDTH = '02';

    public const TYPE_OF_THICKNESS = '03';

    public function getMeasureTypeCode(): string
    {
        return $this->measureTypeCode ? $this->measureTypeCode->getCode() : '';
    }

    public function getMeasureTypeCodeDesc(): string
    {
        return $this->measureTypeCode ? $this->measureTypeCode->getDesc() : '';
    }

    public function setMeasureTypeCode(string $code): void
    {
        $this->measureTypeCode = new CodeInList(CodeList48MeasureType::class, $code);
    }

    public function getMeasurement(): float
    {
        return $this->measurement;
    }

    public function setMeasurement(string $measurement): void
    {
        $this->measurement = (float)$measurement;
    }

    public function getMeasureUnitCode(): string
    {
        return $this->measureUnitCode;
    }

    public function setMeasureUnitCode(string $measureUnitCode): void
    {
        $this->measureUnitCode = $measureUnitCode;
    }

    public function isHeight(): bool
    {
        return (string)$this->measureTypeCode === self::TYPE_OF_HEIGHT;
    }

    public function isWidth(): bool
    {
        return (string)$this->measureTypeCode === self::TYPE_OF_WIDTH;
    }

    public function isThickness(): bool
    {
        return (string)$this->measureTypeCode === self::TYPE_OF_THICKNESS;
    }
}