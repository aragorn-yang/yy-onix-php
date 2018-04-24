<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasRecordReference
{
    /** @var string */
    protected $recordReference = '';

    public function getRecordReference(): string
    {
        return $this->recordReference;
    }

    public function setRecordReference(string $recordReference): void
    {
        $this->recordReference = $recordReference;
    }
}