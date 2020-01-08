<?php

namespace AragornYang\Onix\Composites;

class Reissue extends Composite
{
    /** @var string */
    protected $reissueDate = '';

    public function setReissueDate(string $value): void
    {
        $this->reissueDate = $value;
    }

    public function getReissueDate(): string
    {
        return $this->reissueDate;
    }
}