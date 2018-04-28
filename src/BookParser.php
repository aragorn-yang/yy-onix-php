<?php

namespace AragornYang\Onix;

abstract class BookParser
{
    /** @var Onix */
    protected $onix;
    /** @var callable */
    protected $productHandler;
    /** @var int */
    protected $productCount = 0;

    public function __construct()
    {
        $this->onix = Onix::getNewInstance();
    }

    abstract public function parseString(string $contents): void;
    abstract public function parseFile(string $file): void;


    public function onixVersion(): string
    {
        return $this->onix->version();
    }

    public function getUnrecognisableElements(): array
    {
        return $this->onix->getUnrecognisableElements();
    }

    public function getUnrecognisableCodes(): array
    {
        return $this->onix->getUnrecognisableCodes();
    }

    public function setProductHandler(callable $productHandler): void
    {
        $this->productHandler = $productHandler;
    }
}