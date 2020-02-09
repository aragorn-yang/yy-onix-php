<?php

namespace AragornYang\Onix\ProductFeatures\V30;

use AragornYang\Onix\Composites\V30\PublishingDetail;

trait HasPublishingDetail
{
    /** @var PublishingDetail[] */
    protected $publishingDetail;

    public function getPublishingDetail(): ?PublishingDetail
    {
        return $this->publishingDetail;
    }

    public function setPublishingDetail(\SimpleXMLElement $xml): void
    {
        $this->publishingDetail = PublishingDetail::buildFromXml($xml, $this);
    }
}