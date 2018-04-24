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
    }
}