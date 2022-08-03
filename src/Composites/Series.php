<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\ProductFeatures\HasContributors;
use AragornYang\Onix\ProductFeatures\HasTitles;
use SimpleXMLElement;

class Series extends Composite
{
    use HasContributors, HasTitles;

    /** @var SeriesIdentifier[] */
    protected $seriesIdentifiers = [];
    protected $titleOfSeries = '';
    protected $numberWithinSeries = 0;

    public function getSeriesIdentifier(string $type): ?SeriesIdentifier
    {
        return $this->seriesIdentifiers[$type] ?? null;
    }

    public function setSeriesIdentifier(SimpleXMLElement $xml): void
    {
        /** @var SeriesIdentifier $identifier */
        $identifier = SeriesIdentifier::buildFromXml($xml, $this);
        $this->seriesIdentifiers[$identifier->getSeriesIDType()] = $identifier;
    }

    public function getTitleOfSeries(): string
    {
        return $this->titleOfSeries;
    }

    public function setTitleOfSeries(string $titleOfSeries): void
    {
        $this->titleOfSeries = $titleOfSeries;
    }

    public function getNumberWithinSeries(): int
    {
        return $this->numberWithinSeries;
    }

    public function setNumberWithinSeries(string $numberWithinSeries): void
    {
        $this->numberWithinSeries = (int)$numberWithinSeries;
    }
}