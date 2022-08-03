<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\NotForSale;
use SimpleXMLElement;

trait HasNotForSales
{
    ///** @var array|NotForSale */
    protected $notForSales = [];

    public function getNotForSale(): array
    {
        return $this->notForSales;
    }

    public function setNotForSale(SimpleXMLElement $xml): void
    {
        $this->notForSales[] = NotForSale::buildFromXml($xml, $this);
    }
}