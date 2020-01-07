<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\CopyrightStatement;

trait HasCopyrightStatements
{
    /** @var array|CopyrightStatement */
    protected $copyrightStatements = [];

    public function getCopyrightStatement(): array
    {
        return $this->copyrightStatements;
    }

    public function setCopyrightStatement(\SimpleXMLElement $xml): void
    {
        $this->copyrightStatements[] = CopyrightStatement::buildFromXml($xml, $this);
    }
}