<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList32ComplexitySchemeIdentifier;

class Complexity extends Composite
{
    /** @var CodeInList */
    protected $complexitySchemeIdentifier;

    /** @var string */
    protected $complexityCode = '';

    public function getComplexitySchemeIdentifier(): string
    {
        return $this->complexitySchemeIdentifier ? $this->complexitySchemeIdentifier->code() : '';
    }

    public function getComplexitySchemeIdentifierDesc(): string
    {
        return $this->complexitySchemeIdentifier ? $this->complexitySchemeIdentifier->desc() : '';
    }

    public function setComplexitySchemeIdentifier(string $code): void
    {
        $this->complexitySchemeIdentifier = new CodeInList(CodeList32ComplexitySchemeIdentifier::class, $code);
    }

    public function setComplexityCode(string $code): void
    {
        $this->complexityCode = $code;
    }

    public function getComplexityCode(): string
    {
        return $this->complexityCode;
    }
}