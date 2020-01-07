<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\Composites\CopyrightOwner;

class CopyrightStatement extends Composite
{
    /** @var string */
    protected $copyrightYear = '';

    /** @var array|CopyrightOwner */
    protected $copyrightOwner = [];

    public function getCopyrightYear(): string
    {
        return $this->copyrightYear;
    }

    public function setCopyrightYear(string $value): void
    {
        $this->copyrightYear = $value;
    }

    public function getCopyrightOwner(): array
    {
        return $this->copyrightOwner;
    }

    public function setCopyrightOwner(\SimpleXMLElement $xml): void
    {
        $this->copyrightOwner[] = CopyrightOwner::buildFromXml($xml, $this);
    }
}