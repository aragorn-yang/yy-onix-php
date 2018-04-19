<?php

namespace AragornYang\Onix\Composites;

class Measure extends Composite
{
    /** @var string */
    protected $measureTypeCode = '';
    /** @var float */
    protected $measurement = 0.0;
    /** @var string */
    protected $measureUnitCode = '';

    public function getMeasureTypeCode(): string
    {
        return $this->measureTypeCode;
    }

    public function setMeasureTypeCode(string $measureTypeCode): void
    {
        $this->measureTypeCode = $measureTypeCode;
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
        return $this->measureTypeCode === '01';
    }

    public function isWidth(): bool
    {
        return $this->measureTypeCode === '02';
    }

    public function isThickness(): bool
    {
        return $this->measureTypeCode === '03';
    }
}