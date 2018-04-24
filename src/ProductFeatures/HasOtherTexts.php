<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\OtherText;

trait HasOtherTexts
{
    /** @var OtherText[] */
    protected $otherTexts = [];

    public function setOtherText(\SimpleXMLElement $xml): void
    {
        $this->otherTexts[] = OtherText::buildFromXml($xml);
    }

    public function getMainDescription(): string
    {
        foreach ($this->otherTexts as $otherText) {
            if ($otherText->isMainDescription()) {
                return $otherText->getText();
            }
        }
        return '';
    }

    public function getReviewQuote(): string
    {
        foreach ($this->otherTexts as $otherText) {
            if ($otherText->isReviewQuote()) {
                return $otherText->getText();
            }
        }
        return '';
    }
}