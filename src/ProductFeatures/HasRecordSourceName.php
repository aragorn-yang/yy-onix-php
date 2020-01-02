<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasRecordSourceName
{
    /** @var string */
    protected $recordSourceName = '';

    public function getRecordSourceName(): string
    {
        return $this->recordSourceName;
    }

    public function setRecordSourceName(string $value): void
    {
        $this->recordSourceName = $value;
    }
}