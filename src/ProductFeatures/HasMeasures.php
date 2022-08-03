<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Measure;
use SimpleXMLElement;

trait HasMeasures
{
    /** @var Measure[] */
    protected $measures = [];
    /** @var Measure */
    protected $height;
    /** @var Measure */
    protected $width;
    /** @var Measure */
    protected $thickness;
    /** @var Measure */
    protected $weight;

    public function setMeasure(SimpleXMLElement $xml): void
    {
        /** @var Measure $measure */
        $measure = Measure::buildFromXml($xml, $this);
        $this->measures[] = $measure;
        if ($measure->isHeight()) {
            $this->height = $measure;
        } elseif ($measure->isWidth()) {
            $this->width = $measure;
        } elseif ($measure->isThickness()) {
            $this->thickness = $measure;
        } elseif ($measure->isWeight()) {
            $this->weight = $measure;
        }
    }

    public function getMeasures(): array
    {
        return $this->measures;
    }

    public function getHeightMeasurement(): float
    {
        return $this->height->getMeasurement();
    }

    public function getHeightUnit(): string
    {
        return $this->height->getMeasureUnitCode();
    }

    public function getWidthMeasurement(): float
    {
        return $this->width->getMeasurement();
    }

    public function getWidthUnit(): string
    {
        return $this->width->getMeasureUnitCode();
    }

    public function getThicknessMeasurement(): float
    {
        return $this->thickness->getMeasurement();
    }

    public function getThicknessUnit(): string
    {
        return $this->thickness->getMeasureUnitCode();
    }

    public function getWeightMeasurement(): float
    {
        return $this->weight->getMeasurement();
    }

    public function getWeightUnit(): string
    {
        return $this->weight->getMeasureUnitCode();
    }
}
