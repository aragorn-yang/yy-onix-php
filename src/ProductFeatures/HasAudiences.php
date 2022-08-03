<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Audience;
use SimpleXMLElement;

trait HasAudiences
{
    /** @var array|Audience[] */
    protected $audiences = [];

    /**
     * @return Audience[]
     */
    public function getAudiences(): array
    {
        return $this->audiences;
    }

    /**
     * @return string
     */
    public function getMainAudienceCode(): string
    {
        return $this->audiences[0]->getAudienceCodeValue();
    }

    public function setAudience(SimpleXMLElement $xml): void
    {
        $this->audiences[] = Audience::buildFromXml($xml, $this);
    }
}
