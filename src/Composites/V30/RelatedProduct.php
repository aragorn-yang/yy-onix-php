<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList51ProductRelation;
use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\Composites\ProductIdentifier;
use SimpleXMLElement;

class RelatedProduct extends Composite
{
    /** @var CodeInList */
    protected $productRelationCode;

    /** @var ProductIdentifier[] */
    protected $productIdentifier;

    public function getProductRelationCode(): string
    {
        return $this->productRelationCode ? $this->productRelationCode->code() : '';
    }

    public function getProductRelationCodeDesc(): string
    {
        return $this->productRelationCode ? $this->productRelationCode->desc() : '';
    }

    public function setProductRelationCode(string $code): void
    {
        $this->productRelationCode = new CodeInList(CodeList51ProductRelation::class, $code);
    }

    public function setProductIdentifier(SimpleXMLElement $xml): void
    {
        $this->productIdentifier[] = ProductIdentifier::buildFromXml($xml, $this);
    }

    public function getProductIdentifier(): array
    {
        return $this->productIdentifier;
    }

    /**
     * @return ProductIdentifier[]
     */
    public function getIsbn10(): string
    {
        foreach ($this->productIdentifier as $productIdentifier) {
            if ('02' !== $productIdentifier->getProductIDType()) {
                continue;
            }

            return $productIdentifier->getIDValue();
        }

        return '';
    }

    /**
     * @return ProductIdentifier[]
     */
    public function getIsbn13(): string
    {
        foreach ($this->productIdentifier as $productIdentifier) {
            if ('15' !== $productIdentifier->getProductIDType()) {
                continue;
            }

            return $productIdentifier->getIDValue();
        }

        return '';
    }
}
