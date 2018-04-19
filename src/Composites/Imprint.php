<?php

namespace AragornYang\Onix\Composites;

class Imprint extends Composite
{
    /** @var string */
    protected $imprintName = '';

    public function getImprintName(): string
    {
        return $this->imprintName;
    }

    public function setImprintName(string $imprintName): void
    {
        $this->imprintName = $imprintName;
    }
}