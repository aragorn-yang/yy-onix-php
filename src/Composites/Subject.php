<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList27SubjectSchemeIdentifier;

/**
 * @see PR.13 Subject in Onix Spec 2.1
 * Class Subject
 * @package AragornYang\Onix\Composites
 */
class Subject extends Composite
{
    /** @var CodeInList */
    protected $subjectSchemeIdentifier;
    /** @var string */
    protected $subjectSchemeName = '';
    /** @var string */
    protected $subjectSchemeVersion = '';
    /** @var string */
    protected $subjectCode = '';
    /** @var string */
    protected $subjectHeadingText = '';

    public function getSubjectSchemeIdentifier(): string
    {
        return $this->subjectSchemeIdentifier ? $this->subjectSchemeIdentifier->code() : '';
    }

    public function getSubjectSchemeIdentifierDesc(): string
    {
        return $this->subjectSchemeIdentifier ? $this->subjectSchemeIdentifier->desc() : '';
    }

    public function setSubjectSchemeIdentifier(string $code): void
    {
        $this->subjectSchemeIdentifier = new CodeInList(CodeList27SubjectSchemeIdentifier::class, $code);
    }

    public function getSubjectSchemeName(): string
    {
        return $this->subjectSchemeName;
    }

    public function setSubjectSchemeName(string $subjectSchemeName): void
    {
        $this->subjectSchemeName = $subjectSchemeName;
    }

    public function getSubjectSchemeVersion(): string
    {
        return $this->subjectSchemeVersion;
    }

    public function setSubjectSchemeVersion(string $subjectSchemeVersion): void
    {
        $this->subjectSchemeVersion = $subjectSchemeVersion;
    }

    public function getSubjectCode(): string
    {
        return $this->subjectCode;
    }

    public function setSubjectCode(string $subjectCode): void
    {
        $this->subjectCode = $subjectCode;
    }

    public function getSubjectHeadingText(): string
    {
        return $this->subjectHeadingText;
    }

    public function setSubjectHeadingText(string $subjectHeadingText): void
    {
        $this->subjectHeadingText = $subjectHeadingText;
    }
}