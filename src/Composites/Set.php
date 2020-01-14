<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;

class Set extends Composite
{
    use HasProductIdentifiers;

    /** @var string */
    protected $titleOfSet = '';
    /** @var string */
    protected $setPartTitle = '';
    /** @var string */
    protected $setItemTitle = '';

    public function getTitleOfSet(): string
    {
        return $this->titleOfSet;
    }

    public function setTitleOfSet(string $titleOfSet): void
    {
        $this->titleOfSet = $titleOfSet;
    }

    public function getSetPartTitle(): string
    {
        return $this->setPartTitle;
    }

    public function setSetPartTitle(string $setPartTitle): void
    {
        $this->setPartTitle = $setPartTitle;
    }

    public function getSetItemTitle(): string
    {
        return $this->setItemTitle;
    }

    public function setSetItemTitle(string $setItemTitle): void
    {
        $this->setItemTitle = $setItemTitle;
    }
}