<?php

namespace AragornYang\Onix\ProductFeatures\V30;

use AragornYang\Onix\Composites\V30\Barcode;
use SimpleXMLElement;

trait HasBarcode
{
    /** @var array|Barcode */
    protected $barcodes;

    public function getBarcodes(): ?array
    {
        return $this->barcodes;
    }

    public function setBarcode(SimpleXMLElement $xml): void
    {
        $this->barcodes[] = Barcode::buildFromXml($xml, $this);
    }
}