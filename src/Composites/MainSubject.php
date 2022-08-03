<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList26MainSubjectSchemeIdentifier;
use AragornYang\Onix\ProductFeatures\HasSubjectSchemeVersion;

class MainSubject extends Composite
{
    use HasSubjectSchemeVersion;

    /** @var CodeInList */
    protected $mainSubjectSchemeIdentifier;

    /** @var string */
    protected $subjectCode = '';

    /** @var string */
    protected $subjectHeadingText = '';

    public function setMainSubjectSchemeIdentifier(string $code): void
    {
        $this->mainSubjectSchemeIdentifier = new CodeInList(CodeList26MainSubjectSchemeIdentifier::class, $code);
    }

    public function getMainSubjectSchemeIdentifier(): string
    {
        return $this->mainSubjectSchemeIdentifier ? $this->mainSubjectSchemeIdentifier->code() : '';
    }

    public function getMainSubjectSchemeIdentifierDesc(): string
    {
        return $this->mainSubjectSchemeIdentifier ? $this->mainSubjectSchemeIdentifier->desc() : '';
    }

    public function setSubjectCode(string $value): void
    {
        $this->subjectCode = $value;
    }

    public function getSubjectCode(): string
    {
        return $this->subjectCode;
    }

    public function setSubjectHeadingText(string $value): void
    {
        $this->subjectHeadingText = $value;
    }

    public function getSubjectHeadingText(): string
    {
        return $this->subjectHeadingText;
    }
}