<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasSeriesTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Series>
            <SeriesIdentifier>
                <SeriesIDType>01</SeriesIDType>
                <IDTypeName>OUP</IDTypeName>
                <IDValue>OSSS</IDValue>
            </SeriesIdentifier>
            <TitleOfSeries>Oxford Statistical Science Series</TitleOfSeries>
            <NumberWithinSeries>5</NumberWithinSeries>
        </Series>');
        $series = $product->getSeries();

        $this->assertSame('Oxford Statistical Science Series', $series[0]->getTitleOfSeries());
        $this->assertSame(5, $series[0]->getNumberWithinSeries());
    }
}