<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeLists\List07ProductFormCode;

class Product extends Composite
{
    /** @var string */
    protected $recordReference = '';
    /** @var string */
    protected $notificationType = '';
    /** @var string */
    protected $isbn10 = '';
    /** @var string */
    protected $isbn13 = '';
    /** @var string */
    protected $productFormCode = '';
    /** @var string */
    protected $title = '';
    /** @var Contributor[] */
    protected $contributors = [];
    /** @var string */
    protected $editionTypeCode = '';
    /** @var string */
    protected $editionNumber = '';
    /** @var Language[] */
    protected $languages = [];
    /** @var int */
    protected $numberOfPages = 0;
    /** @var string */
    protected $BASICMainSubject = '';
    /** @var string */
    protected $audienceCode = '';
    /** @var OtherText[] */
    protected $otherTexts = [];
    /** @var Imprint[] */
    protected $imprints = [];
    /** @var Publisher[] */
    protected $publishers = [];
    /** @var string */
    protected $publicationDate = '';
    /** @var Measure[] */
    protected $measures = [];
    /** @var Measure */
    protected $height;
    /** @var Measure */
    protected $width;
    /** @var Measure */
    protected $thickness;
    /** @var SupplyDetail[] */
    protected $supplyDetails = [];


    public function getRecordReference(): string
    {
        return $this->recordReference;
    }

    public function setRecordReference(string $recordReference): void
    {
        $this->recordReference = $recordReference;
    }

    public function getNotificationType(): string
    {
        return $this->notificationType;
    }

    public function setNotificationType(string $notificationType): void
    {
        $this->notificationType = $notificationType;
    }


    public function getIsbn10(): string
    {
        return $this->isbn10;
    }

    public function getIsbn13(): string
    {
        return $this->isbn13;
    }

    public function getProductFormCode(): string
    {
        return $this->productFormCode;
    }

    public function getProductForm(): string
    {
        return List07ProductFormCode::translate($this->productFormCode);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setProductIdentifier(\SimpleXMLElement $xml): void
    {
        /** @var ProductIdentifier $identifier */
        $identifier = ProductIdentifier::buildFromXml($xml);
        if ($identifier->isIsbn10()) {
            $this->isbn10 = $identifier->getIDValue();
            return;
        }

        if ($identifier->isIsbn13()) {
            $this->isbn13 = $identifier->getIDValue();
            return;
        }
    }

    public function setProductForm(\SimpleXMLElement $productFormCode): void
    {
        $this->productFormCode = (string)$productFormCode;
    }

    public function setTitle(\SimpleXMLElement $xml): void
    {
        /** @var Title $title */
        $title = Title::buildFromXml($xml);
        if ($title->isDistinctiveTitle()) {
            $this->title = $title->getTitleText();
            return;
        }
    }

    public function setContributor(\SimpleXMLElement $xml): void
    {
        $this->contributors[] = Contributor::buildFromXml($xml);
    }

    public function getAuthor(): ?Contributor
    {
        foreach ($this->contributors as $contributor) {
            if ($contributor->getContributorRole() === 'A01') {
                return $contributor;
            }
        }
        return null;
    }

    public function getEditionTypeCode(): string
    {
        return $this->editionTypeCode;
    }

    public function setEditionTypeCode(string $editionTypeCode): void
    {
        $this->editionTypeCode = $editionTypeCode;
    }

    public function getEditionNumber(): string
    {
        return $this->editionNumber;
    }

    public function setEditionNumber(string $editionNumber): void
    {
        $this->editionNumber = $editionNumber;
    }

    public function setLanguage(\SimpleXMLElement $xml): void
    {
        $this->languages[] = Language::buildFromXml($xml);
    }

    public function getLanguageCode(): string
    {
        foreach ($this->languages as $language) {
            if ($language->isTheLanguageOfText()) {
                return $language->getLanguageCode();
            }
        }
        return '';
    }

    public function getNumberOfPages(): int
    {
        return $this->numberOfPages;
    }

    public function setNumberOfPages(\SimpleXMLElement $numberOfPages): void
    {
        $this->numberOfPages = (int)$numberOfPages;
    }

    public function getBASICMainSubject(): string
    {
        return $this->BASICMainSubject;
    }

    public function setBASICMainSubject(string $BASICMainSubject): void
    {
        $this->BASICMainSubject = $BASICMainSubject;
    }

    public function getAudienceCode(): string
    {
        return $this->audienceCode;
    }

    public function setAudienceCode(string $audienceCode): void
    {
        $this->audienceCode = $audienceCode;
    }

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

    public function getImprint(): string
    {
        if (\count($this->imprints) === 0) {
            return '';
        }
        if (\count($this->imprints) === 1) {
            return $this->imprints[0]->getImprintName();
        }
        $imprints = '';
        foreach ($this->imprints as $imprint) {
            $imprints .= $imprint->getImprintName() . '; ';
        }
        return trim($imprints);
    }

    public function setImprint(\SimpleXMLElement $xml): void
    {
        $this->imprints[] = Imprint::buildFromXml($xml);
    }

    public function getPublisher(): string
    {
        if (\count($this->publishers) === 0) {
            return '';
        }
        if (\count($this->publishers) === 1) {
            return $this->publishers[0]->getPublisherName();
        }
        $publishers = '';
        foreach ($this->publishers as $publisher) {
            $publishers .= $publisher->getPublisherName() . '; ';
        }
        return trim($publishers);
    }

    public function setPublisher(\SimpleXMLElement $xml): void
    {
        $this->publishers[] = Publisher::buildFromXml($xml);
    }

    public function getPublicationDate(): string
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(string $publicationDate): void
    {
        $this->publicationDate = $publicationDate;
    }

    public function setMeasure(\SimpleXMLElement $xml): void
    {
        $measure = Measure::buildFromXml($xml);
        $this->measures[] = $measure;
        if ($measure->isHeight()) {
            $this->height = $measure;
        } elseif ($measure->isWidth()) {
            $this->width = $measure;
        } elseif ($measure->isThickness()) {
            $this->thickness = $measure;
        }
    }

    public function getHeightMeasurement(): float
    {
        return $this->height->getMeasurement();
    }

    public function getHeightUnit(): string
    {
        return $this->height->getMeasureUnitCode();
    }

    public function getWidthMeasurement(): float
    {
        return $this->width->getMeasurement();
    }

    public function getWidthUnit(): string
    {
        return $this->width->getMeasureUnitCode();
    }

    public function getThicknessMeasurement(): float
    {
        return $this->thickness->getMeasurement();
    }

    public function getThicknessUnit(): string
    {
        return $this->thickness->getMeasureUnitCode();
    }

    public function getSupplyDetails(): array
    {
        return $this->supplyDetails;
    }

    public function setSupplyDetail(\SimpleXMLElement $xml): void
    {
        $this->supplyDetails[] = SupplyDetail::buildFromXml($xml);
    }
}