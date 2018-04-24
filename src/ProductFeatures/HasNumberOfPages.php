<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasNumberOfPages
{
    /** @var int */
    protected $numberOfPages = 0;

    public function getNumberOfPages(): int
    {
        return $this->numberOfPages;
    }

    public function setNumberOfPages(\SimpleXMLElement $numberOfPages): void
    {
        $this->numberOfPages = (int)$numberOfPages;
    }
}