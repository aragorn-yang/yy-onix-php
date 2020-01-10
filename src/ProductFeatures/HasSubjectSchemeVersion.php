<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasSubjectSchemeVersion
{
    /** @var string */
    protected $subjectSchemeVersion = '';

    public function getSubjectSchemeVersion(): string
    {
        return $this->subjectSchemeVersion;
    }

    public function setSubjectSchemeVersion(string $subjectSchemeVersion): void
    {
        $this->subjectSchemeVersion = $subjectSchemeVersion;
    }
}