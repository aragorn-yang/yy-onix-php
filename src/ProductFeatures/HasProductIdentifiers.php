<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\ProductIdentifier;

trait HasProductIdentifiers
{
    /** @var ProductIdentifier[] */
    protected $productIdentifiers = [];
    /** @var string */
    protected $isbn10 = '';
    /** @var string */
    protected $isbn13 = '';

    public function getIsbn10(): string
    {
        return $this->isbn10;
    }

    public function getIsbn13(): string
    {
        return $this->isbn13;
    }

    public function setProductIdentifier(\SimpleXMLElement $xml): void
    {
        /** @var ProductIdentifier $identifier */
        $identifier = ProductIdentifier::buildFromXml($xml);
        $this->productIdentifiers[$identifier->getProductIDType()] = $identifier;
        if ($identifier->isIsbn10()) {
            $this->isbn10 = $identifier->getIDValue();
            return;
        }

        if ($identifier->isIsbn13()) {
            $this->isbn13 = $identifier->getIDValue();
            return;
        }
    }
}