<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList51ProductRelation;
use AragornYang\Onix\Composites\ProductIdentifier;

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

    public function setProductIdentifier(\SimpleXMLElement $xml): void
    {
        $this->productIdentifier[] = ProductIdentifier::buildFromXml($xml, $this);
    }

    public function getProductIdentifier(): array
    {
        return $this->productIdentifier;
    }
}