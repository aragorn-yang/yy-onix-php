<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Contributor;
use AragornYang\Onix\Composites\V30\DescriptiveDetail;
use SimpleXMLElement;

trait HasDescriptiveDetail
{
    /** @var DescriptiveDetail */
    protected $descriptiveDetail;

    public function getDescriptiveDetail(): DescriptiveDetail
    {
        return $this->descriptiveDetail;
    }

    public function setDescriptiveDetail(SimpleXMLElement $xml): void
    {
        /** @var DescriptiveDetail $descriptiveDetail */
        $this->descriptiveDetail = DescriptiveDetail::buildFromXml($xml, $this);
    }

    public function getProductForm(): string
    {
        return $this->descriptiveDetail->getProductForm();
    }

    public function getProductFormDesc(): string
    {
        return $this->descriptiveDetail->getProductFormDesc();
    }

    public function getAuthor(): ?Contributor
    {
        return $this->descriptiveDetail->getAuthor();
    }
}
