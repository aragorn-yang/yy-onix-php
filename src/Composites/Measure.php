<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList48MeasureTypeCode;
use AragornYang\Onix\CodeLists\CodeList50MeasureUnitCode;

/**
 * @see PR.22 Dimensions in Onix Spec 2.1
 * Class Measure
 * @package AragornYang\Onix\Composites
 */
class Measure extends Composite
{
    /** @var CodeInList */
    protected $measureTypeCode;
    /** @var float */
    protected $measurement = 0.0;
    /** @var CodeInList */
    protected $measureUnitCode;

    protected const TYPE_OF_HEIGHT = '01';
    protected const TYPE_OF_WIDTH = '02';
    protected const TYPE_OF_THICKNESS = '03';
    protected const TYPE_OF_WEIGHT = '08';

    public function getMeasureTypeCode(): string
    {
        return $this->measureTypeCode ? $this->measureTypeCode->code() : '';
    }

    public function getMeasureTypeCodeDesc(): string
    {
        return $this->measureTypeCode ? $this->measureTypeCode->desc() : '';
    }

    public function setMeasureTypeCode(string $code): void
    {
        $this->measureTypeCode = new CodeInList(CodeList48MeasureTypeCode::class, $code);
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
        return $this->measureUnitCode ? $this->measureUnitCode->code() : '';
    }

    public function getMeasureUnitCodeDesc(): string
    {
        return $this->measureUnitCode ? $this->measureUnitCode->desc() : '';
    }

    public function setMeasureUnitCode(string $code): void
    {
        $this->measureUnitCode = new CodeInList(CodeList50MeasureUnitCode::class, $code);
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

    public function isWeight(): bool
    {
        return (string)$this->measureTypeCode === self::TYPE_OF_WEIGHT;
    }
}