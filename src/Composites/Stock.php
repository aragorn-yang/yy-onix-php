<?php

namespace AragornYang\Onix\Composites;

class Stock extends Composite
{
    /** @var int */
    protected $onHand = 0;

    public function getOnHand(): int
    {
        return $this->onHand;
    }

    public function setOnHand(int $onHand): void
    {
        $this->onHand = $onHand;
    }
}