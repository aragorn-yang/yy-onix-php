<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\OtherText;

trait HasOtherTexts
{
    /** @var OtherText[] */
    protected $otherTexts = [];

    /**
     * @return OtherText[]
     */
    public function getOtherTexts(): array
    {
        return $this->otherTexts;
    }

    public function setOtherText(\SimpleXMLElement $xml): void
    {
        $this->otherTexts[] = OtherText::buildFromXml($xml);
    }

    public function getMainDesc(): string
    {
        foreach ($this->otherTexts as $otherText) {
            if ($otherText->isMainDesc()) {
                return $otherText->getText();
            }
        }

        $longDesc = $this->getLongDesc();
        if ($longDesc) {
            return $longDesc;
        }

        $shortDesc = $this->getShortDesc();
        if ($shortDesc) {
            return $shortDesc;
        }

        return '';
    }

    public function getLongDesc(): string
    {
        foreach ($this->otherTexts as $otherText) {
            if ($otherText->isLongDesc()) {
                return $otherText->getText();
            }
        }

        return '';
    }

    public function getShortDesc(): string
    {
        foreach ($this->otherTexts as $otherText) {
            if ($otherText->isShortDesc()) {
                return $otherText->getText();
            }
        }

        return '';
    }

    public function getReviewQuotes(): array
    {
        $reviewQuotes = [];
        foreach ($this->otherTexts as $otherText) {
            if ($otherText->isReviewQuote()) {
                $reviewQuotes[] = $otherText->getText();
            }
        }
        return $reviewQuotes;
    }
}