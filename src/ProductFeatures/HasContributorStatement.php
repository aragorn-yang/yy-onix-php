<?php

namespace AragornYang\Onix\ProductFeatures;

trait HasContributorStatement
{
    /** @var string */
    protected $contributorStatement = '';

    public function getContributorStatement(): string
    {
        return $this->contributorStatement;
    }

    public function setContributorStatement(string $contributorStatement): void
    {
        $this->contributorStatement = $contributorStatement;
    }
}