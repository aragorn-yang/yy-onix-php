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

    /**
     * @return ProductIdentifier[]
     */
    public function getProductIdentifiers(): array
    {
        return $this->productIdentifiers;
    }

    public function setProductIdentifier(\SimpleXMLElement $xml): void
    {
        /** @var ProductIdentifier $identifier */
        $identifier = ProductIdentifier::buildFromXml($xml, $this);
        $this->productIdentifiers[$identifier->getProductIDType()] = $identifier;
        if (!$this->isbn10 && $identifier->isISBN10()) {
            $this->isbn10 = $identifier->getIDValue();
            return;
        }

        if (!$this->isbn13 && ($identifier->isISBN13() || $identifier->isGTIN13())) {
            $this->isbn13 = $identifier->getIDValue();
            return;
        }
    }
}