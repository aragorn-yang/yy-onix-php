<?php

namespace AragornYang\Onix\Composites;

class Prize extends Composite
{
    /** @var string */
    protected $prizeName = '';

    public function getPrizeName(): string
    {
        return $this->prizeName;
    }

    public function setPrizeName(string $prizeName): void
    {
        $this->prizeName = $prizeName;
    }
}