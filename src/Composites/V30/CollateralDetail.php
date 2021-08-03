<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\Composites\V30\TextContents;

class CollateralDetail extends Composite
{
    /** @var TextContents[] */
    protected $textContents;

    public function setTextContent(\SimpleXMLElement $xml): void
    {
        $this->textContents[] = TextContents::buildFromXml($xml, $this);
    }

    public function getTextContents(): array
    {
        return $this->textContents;
    }

    public function getShortDescription()
    {
        foreach ($this->textContents as $textContent) {
            if ('02' !== $textContent->getTextType()) {
                continue;
            }

            return $textContent->getText();
        }

        return '';
    }

    public function getMainDescription(): string
    {
        if (!$this->textContents) {
            return '';
        }

        foreach ($this->textContents as $textContent) {
            if ('03' !== $textContent->getTextType()) {
                continue;
            }

            return $textContent->getText();
        }

        return '';
    }

    public function getFeature(): string
    {
        if (!$this->textContents) {
            return '';
        }

        foreach ($this->textContents as $textContent) {
            if ('11' !== $textContent->getTextType()) {
                continue;
            }

            return $textContent->getText();
        }

        return '';
    }

    public function getBiographicalNote(): string
    {
        if (!$this->textContents) {
            return '';
        }

        foreach ($this->textContents as $textContent) {
            if ('12' !== $textContent->getTextType()) {
                continue;
            }

            return $textContent->getText();
        }

        return '';
    }

    public function getAllDescriptions(): array
    {
        if (!$this->textContents) {
            return [];
        }

        $arr = [];

        foreach ($this->textContents as $textContent) {
            $arr[$textContent->getTextType()] = $textContent->getText();
        }

        return $arr;
    }

    public function getAllNamedDescriptions(): array
    {
        if (!$this->textContents) {
            return [];
        }

        $arr = [];
        foreach ($this->textContents as $textContent) {
            $arr[$textContent->getTextTypeDesc()] = $textContent->getText();
        }

        return $arr;
    }
}
