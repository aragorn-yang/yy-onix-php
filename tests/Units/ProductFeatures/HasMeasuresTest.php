<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasMeasuresTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Measure>
            <MeasureTypeCode>01</MeasureTypeCode>
            <Measurement>9.25</Measurement>
            <MeasureUnitCode>in</MeasureUnitCode>
        </Measure>
        <Measure>
            <MeasureTypeCode>02</MeasureTypeCode>
            <Measurement>6.25</Measurement>
            <MeasureUnitCode>in</MeasureUnitCode>
        </Measure>
        <Measure>
            <MeasureTypeCode>03</MeasureTypeCode>
            <Measurement>1.2</Measurement>
            <MeasureUnitCode>in</MeasureUnitCode>
        </Measure>');
        $this->assertSame(9.25, $product->getHeightMeasurement());
        $this->assertSame('in', $product->getHeightUnit());
        $this->assertSame(6.25, $product->getWidthMeasurement());
        $this->assertSame('in', $product->getWidthUnit());
        $this->assertSame(1.2, $product->getThicknessMeasurement());
        $this->assertSame('in', $product->getThicknessUnit());

        $product = $this->getParsedProduct('<Measure>
            <MeasureTypeCode>01</MeasureTypeCode>
            <Measurement>235</Measurement>
            <MeasureUnitCode>mm</MeasureUnitCode>
        </Measure>
        <Measure>
            <MeasureTypeCode>02</MeasureTypeCode>
            <Measurement>157</Measurement>
            <MeasureUnitCode>mm</MeasureUnitCode>
        </Measure>
        <Measure>
            <MeasureTypeCode>03</MeasureTypeCode>
            <Measurement>15.0</Measurement>
            <MeasureUnitCode>mm</MeasureUnitCode>
        </Measure>
        <Measure>
            <MeasureTypeCode>08</MeasureTypeCode>
            <Measurement>405</Measurement>
            <MeasureUnitCode>gr</MeasureUnitCode>
        </Measure>');
        $this->assertSame(235.0, $product->getHeightMeasurement());
        $this->assertSame('mm', $product->getHeightUnit());
        $this->assertSame(157.0, $product->getWidthMeasurement());
        $this->assertSame('mm', $product->getWidthUnit());
        $this->assertSame(15.0, $product->getThicknessMeasurement());
        $this->assertSame('mm', $product->getThicknessUnit());
        $this->assertSame(405.0, $product->getWeightMeasurement());
        $this->assertSame('gr', $product->getWeightUnit());
    }
}