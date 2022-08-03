<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Series;
use SimpleXMLElement;

trait HasSeries
{
    /** @var array|Series[] */
    protected $series = [];

    /**
     * @return Series[]
     */
    public function getSeries(): array
    {
        return $this->series;
    }

    public function setSeries(SimpleXMLElement $xml): void
    {
        $series = Series::buildFromXml($xml, $this);
        $this->series[] = $series;
    }
}