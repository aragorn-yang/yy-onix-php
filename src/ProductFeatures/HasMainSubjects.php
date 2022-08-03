<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\MainSubject;
use SimpleXMLElement;

trait HasMainSubjects
{
    /** @var array|MainSubject */
    protected $mainSubject = [];

    public function getMainSubject(): array
    {
        return $this->mainSubject;
    }

    public function setMainSubject(SimpleXMLElement $xml): void
    {
        $this->mainSubject[] = MainSubject::buildFromXml($xml, $this);
    }
}