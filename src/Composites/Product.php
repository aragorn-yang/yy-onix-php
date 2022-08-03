<?php

namespace AragornYang\Onix\Composites;

use SimpleXMLElement;

interface Product
{
    public function getIsbn13();
    //
    //public function getIsbn10();
    //
    //public function getSalesRights();
    //
    //public function getCountryOfPublication();
    //
    //public function hasSalesRightsIn(string $string);
    //
    public function getSupplyDetails();

    public function getProductForm();

    public function getProductFormDesc();
    //
    //public function getTitle();
    //
    //public function getAuthor();
    //
    //public function getEditionTypeCode();
    //
    //public function getEditionNumber();
    //
    //public function getLanguageCode();
    //
    //public function getNumberOfPages();
    //
    //public function getBISACMainSubject();
    //
    //public function getAudienceCode();
    //
    //public function getMainDesc();
    //
    //public function getReviewQuotes();
    //
    //public function getImprint();
    //
    //public function getPublisherNames();
    //
    //public function getPublicationDate();
    //
    //public function getHeightMeasurement();
    //
    //public function getHeightUnit();
    //
    //public function getWidthMeasurement();
    //
    //public function getWidthUnit();
    //
    //public function getThicknessMeasurement();
    //
    //public function getThicknessUnit();

    public function setProductXml(SimpleXMLElement $xml): void;

    public function getProductXml(): string;
}