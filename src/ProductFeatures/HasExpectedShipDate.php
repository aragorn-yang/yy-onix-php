<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasExpectedShipDate
{
    /** @var string */
    protected $expectedShipDate = '';

    public function getExpectedShipDate(): string
    {
        return $this->expectedShipDate;
    }

    public function setExpectedShipDate(string $expectedShipDate): void
    {
        $this->expectedShipDate = $expectedShipDate;
    }
}