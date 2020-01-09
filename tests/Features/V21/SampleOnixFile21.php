<?php

namespace AragornYang\Onix\Tests\Features\V21;

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\Composites\SupplyDetail;

/**
 * @property Product $product
 */
trait SampleOnixFile21
{
    /** @test */
    public function it_can_parse_the_sample_file(): void
    {
        $this->assertCount(1, static::$products);
        $this->assertInstanceOf(Product::class, $this->product);
    }

    /** @test */
    public function it_is_version_21(): void
    {
        $this->assertSame('2.1', static::$parser->onixVersion());
    }

    /** @test */
    public function it_can_get_isbn(): void
    {
        $this->assertSame('0816016356', $this->product->getIsbn10());
        $this->assertSame('9780816016358', $this->product->getIsbn13());
    }

    /** @test */
    public function it_can_get_product_form(): void
    {
        $this->assertSame('BB', $this->product->getProductForm());
        $this->assertSame('Hardback', $this->product->getProductFormDesc());
    }

    /** @test */
    public function it_can_get_title(): void
    {
        $this->assertSame('British English, A to Zed', $this->product->getTitle());

        $title = $this->product->getTitleObj();
        $this->assertSame('An', $title->getTitlePrefix());
        $this->assertSame('Unforgettable Christmas', $title->getTitleWithoutPrefix());
    }

    /** @test */
    public function it_can_get_author(): void
    {
        $author = $this->product->getAuthor();

        $this->assertSame('Schur, Norman W', $author->getPersonNameInverted());
        $this->assertSame('Ph.D.', $author->getTitlesAfterNames());
        $this->assertSame('US', $author->getCountryCode());
        $this->assertSame('US-MI', $author->getRegionCode());
        $this->assertSame('Jr.', $author->getSuffixToKey());
        $this->assertSame('Raqs Media Collective', $author->getCorporateName());
        $this->assertSame('St. John', $author->getPrefixToKey());
        $this->assertSame(1, $author->getSequenceNumberWithinRole());

        $websites = $author->getWebsites();
        $this->assertCount(1, $websites);
        $this->assertSame('00', $websites[0]->getWebsiteRole());
        $this->assertSame('Unspecified, see website description', $websites[0]->getWebsiteRoleDesc());
        $this->assertSame("Nell Irvin Painter's Website", $websites[0]->getWebsiteDescription());
        $this->assertSame('http://www.nellpainter.com/', $websites[0]->getWebsiteLink());
    }

    /** @test */
    public function it_can_get_EditionTypeCode(): void
    {
        $this->assertSame('REV', $this->product->getEditionTypeCode());
    }

    /** @test */
    public function it_can_get_EditionNumber(): void
    {
        $this->assertSame('3', $this->product->getEditionNumber());
    }

    /** @test */
    public function it_can_get_Language(): void
    {
        $this->assertSame('eng', $this->product->getLanguageCode());
    }

    /** @test */
    public function it_can_get_NumberOfPages(): void
    {
        $this->assertSame(493, $this->product->getNumberOfPages());
    }

    /** @test */
    public function it_can_get_BASICMainSubject(): void
    {
        $this->assertSame('REF008000', $this->product->getBASICMainSubject());
    }

    /** @test */
    public function it_can_get_AudienceCode(): void
    {
        $this->assertSame('01', $this->product->getAudienceCode());
    }

    /** @test */
    public function it_can_get_MainDescription(): void
    {
        $this->assertSame(0, stripos($this->product->getMainDesc(),
            'BRITISH ENGLISH, A TO ZED is the thoroughly updated, revised, and expanded third edition of Norman'));
    }

    /** @test */
    public function it_can_get_ReviewQuote(): void
    {
        $this->assertSame(0, stripos($this->product->getReviewQuotes()[0],
            'Norman Schur is without doubt the outstanding authority on the similarities and differences between'));
    }

    /** @test */
    public function it_can_get_imprint(): void
    {
        $this->assertSame('Facts on File Publications', $this->product->getImprint());
    }

    /** @test */
    public function it_can_get_publisher(): void
    {
        $this->assertSame('Facts on File Inc', $this->product->getPublisherNames());
    }

    /** @test */
    public function it_can_get_pub_date(): void
    {
        $this->assertSame('1987', $this->product->getPublicationDate());
    }

    /** @test */
    public function it_can_get_measures(): void
    {
        $this->assertSame(9.25, $this->product->getHeightMeasurement());
        $this->assertSame('in', $this->product->getHeightUnit());
        $this->assertSame(6.25, $this->product->getWidthMeasurement());
        $this->assertSame('in', $this->product->getWidthUnit());
        $this->assertSame(1.2, $this->product->getThicknessMeasurement());
        $this->assertSame('in', $this->product->getThicknessUnit());
    }

    /** @test */
    public function it_can_get_supply_details(): void
    {
        $supplyDetails = $this->product->getSupplyDetails();

        $this->assertCount(1, $supplyDetails);

        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $supplyDetails[0];

        $this->assertSame('1234567', $supplyDetail->getSupplierSAN());
        $this->assertSame('IP', $supplyDetail->getAvailabilityCode());

        $price = $supplyDetail->getPrices()[0];
        $this->assertTrue($price->isRrpExcTax());
        $this->assertSame(35.0, $price->getPriceAmount());
        $this->assertSame('5030670154326', $supplyDetail->getSupplierEANLocationNumber());
        $this->assertSame('00', $supplyDetail->getDateFormat());
        $this->assertSame('20190801', $supplyDetail->getOnSaleDate());
        $this->assertSame('+44 (0)1865 474000', $supplyDetail->getTelephoneNumber()[0]);
        $this->assertSame('+44 (0)1865 474001', $supplyDetail->getFaxNumber()[0]);
        $this->assertSame('eurobkinfo@elsevier.com', $supplyDetail->getEmailAddress()[0]);
        $this->assertSame('01', $supplyDetail->getUnpricedItemType());
        $this->assertSame('Free of charge', $supplyDetail->getUnpricedItemTypeDesc());
        $this->assertSame('20190930', $supplyDetail->getLastDateForReturns());
        $this->assertSame('05', $price->getPriceQualifier());
        $this->assertSame('Consumer price', $price->getPriceQualifierDesc());
        $countryExcludeds = $price->getCountryExcluded();
        $this->assertSame('ES', $countryExcludeds[0]->code());
        $this->assertSame('Spain', $countryExcludeds[0]->desc());
        $this->assertSame('Z', $price->getTaxRateCode2());
        $this->assertSame('Zero-rated', $price->getTaxRateCode2Desc());
        $this->assertSame((float)0, $price->getTaxRatePercent2());
        $this->assertSame((float)187.49, $price->getTaxableAmount2());
        $this->assertSame((float)0.00, $price->getTaxAmount2());

        $website = $supplyDetail->getWebsites();
        $this->assertCount(1, $website);
        $this->assertSame('01', $website[0]->getWebsiteRole());
        $this->assertSame("Publisher’s corporate website", $website[0]->getWebsiteRoleDesc());
        $this->assertSame("http://www.wwnorton.com", $website[0]->getWebsiteLink());

        $reissue = $supplyDetail->getReissue();
        $this->assertSame('20121008', $reissue ? $reissue->getReissueDate() : '');

        $supplyToCountryExcludeds = $supplyDetail->getSupplyToCountryExcluded();
        $this->assertSame('AD', $supplyToCountryExcludeds ? $supplyToCountryExcludeds[0]->code() : '');
    }

    /** @test */
    public function it_can_get_ContributorStatement(): void
    {
        $this->assertSame('Trevor Hoppe', $this->product->getContributorStatement());
    }

    /** @test */
    public function it_can_get_recordSourceName()
    {
        $recordSourceName = $this->product->getRecordSourceName();

        $this->assertSame('Bloomsbury', $recordSourceName);
    }

    /** @test */
    public function it_can_get_tradeCategory()
    {
        $this->assertSame('01', $this->product->getTradeCategory());
        $this->assertSame('UK open market edition', $this->product->getTradeCategoryDesc());
    }

    /** @test */
    public function it_can_get_numberOfPieces()
    {
        $numberOfPieces = $this->product->getNumberOfPieces();

        $this->assertSame(6, $numberOfPieces);
    }

    /** @test */
    public function it_can_get_containedItems()
    {
        $containedItems = $this->product->getContainedItems();

        $this->assertCount(2, $containedItems);

        $productIdentifiers = $containedItems[0]->getProductIdentifiers();
        $productIdentifiers = array_values($productIdentifiers);

        $this->assertSame('BC', $containedItems[0]->getProductForm());
        $this->assertSame(1, $containedItems[0]->getNumberOfPieces());
        $this->assertSame('15', $productIdentifiers ? $productIdentifiers[0]->getProductIDType() : '');
        $this->assertSame('9780520294356', $productIdentifiers ? $productIdentifiers[0]->getIDValue() : '');
        $this->assertSame('B303', $containedItems[0]->getProductFormDetail());
        $this->assertSame('Loose leaf – sheets only', $containedItems[0]->getProductFormDetailDesc());
        $this->assertSame('14', $containedItems[1]->getProductPackaging());
        $this->assertSame('In wallet or folder', $containedItems[1]->getProductPackagingDesc());
    }

    /** @test */
    public function it_can_get_extent(): void
    {
        $extent = $this->product->getExtent();

        $this->assertSame('00', $extent ? $extent[0]->getExtentType() : '');
        $this->assertSame('03', $extent ? $extent[0]->getExtentUnit() : '');
        $this->assertSame('300', $extent ? $extent[0]->getExtentValue() : '');
    }

    /** @test */
    public function it_can_get_otherText()
    {
        $otherTexts = $this->product->getOtherTexts();

        $this->assertCount(2, $otherTexts);

        $this->assertSame('Ilana Feldman', $otherTexts[0]->getTextAuthor());
        $this->assertSame('20180718', $otherTexts[0]->getTextPublicationDate());
    }

    /** @test */
    public function it_can_get_copyrightYear()
    {
        $copyYears = $this->product->getCopyrightYear();

        $this->assertSame('2019', $copyYears ? $copyYears[0] : '');
    }

    /** @test */
    public function it_can_get_notForSale()
    {
        $notForSale = $this->product->getNotForSale();

        $rightsCountry = $notForSale ? $notForSale[0]->getRightsCountry() : '';

        $this->assertSame('SS', $rightsCountry);
    }

    /** @test */
    public function it_can_get_prize()
    {
        $prizes = $this->product->getPrizes();

        $this->assertCount(2, $prizes);

        $this->assertSame('CBC Canada Reads', $prizes[1]->getPrizeName());
        $this->assertSame('2018', $prizes[1]->getPrizeYear());

        $this->assertSame('CA', $prizes[1]->getPrizeCountry());
        $this->assertSame('Canada', $prizes[1]->getPrizeCountryDesc());

        $this->assertSame('05', $prizes[1]->getPrizeCode());
        $this->assertSame('Long-listed', $prizes[1]->getPrizeCodeDesc());

        $this->assertSame('BBC Wildlife', $prizes[0]->getPrizeJury());
    }

    /** @test */
    public function it_can_get_productContentType()
    {
        $this->assertSame('10', $this->product->getProductContentType());
        $this->assertSame('Text (eye-readable)', $this->product->getProductContentTypeDesc());
    }

    /** @test */
    public function it_can_get_audienceRanges()
    {
        $audienceRanges = $this->product->getAudienceRange();

        $this->assertCount(1, $audienceRanges);

        $this->assertSame('11', $audienceRanges[0]->getAudienceRangeQualifier());
        $this->assertSame('US school grade range', $audienceRanges[0]->getAudienceRangeQualifierDesc());

        $audienceRangePrecision = $audienceRanges[0]->getAudienceRangePrecision();
        $this->assertSame('03', $audienceRangePrecision ? $audienceRangePrecision[0]->code() : '');
        $this->assertSame('From', $audienceRangePrecision ? $audienceRangePrecision[0]->desc() : '');

        $audienceRangeValue = $audienceRanges[0]->getAudienceRangeValue();
        $this->assertSame('11', $audienceRangeValue ? $audienceRangeValue[0]->code() : '');
        $this->assertSame('Eleventh Grade', $audienceRangeValue ? $audienceRangeValue[0]->desc() : '');
    }

    /** @test */
    public function it_can_get_illustrations()
    {
        $illustrations = $this->product->getIllustrations();

        $this->assertCount(1, $illustrations);

        $this->assertSame('01', $illustrations[0]->getIllustrationType());
        $this->assertSame('Illustrations, black and white', $illustrations[0]->getIllustrationTypeDesc());

        $this->assertSame(4, $illustrations[0]->getNumber());
        $this->assertSame('Cover illustration', $illustrations[0]->getIllustrationTypeDescription());
    }

    /** @test */
    public function it_can_get_numberOfIllustrations()
    {
        $this->assertSame(4, $this->product->getNumberOfIllustrations());
    }

    /** @test */
    public function it_can_get_mainsubject()
    {
        $mainSubject = $this->product->getMainSubject();

        $this->assertCount(1, $mainSubject);

        $this->assertSame('93', $mainSubject[0]->getMainSubjectSchemeIdentifier());
        $this->assertSame('Thema subject category', $mainSubject[0]->getMainSubjectSchemeIdentifierDesc());

        $this->assertSame('FFP', $mainSubject[0]->getSubjectCode());
        $this->assertSame('Crime & mystery: police procedural', $mainSubject[0]->getSubjectHeadingText());
    }

    /** @test */
    public function it_can_get_productPackaging()
    {
        $this->assertSame('00', $this->product->getProductPackaging());
        $this->assertSame('No outer packaging', $this->product->getProductPackagingDesc());
    }

    /** @test */
    public function it_can_get_productWebsite()
    {
        $productWebsites = $this->product->getProductWebsite();

        $this->assertCount(1, $productWebsites);

        $this->assertSame('01', $productWebsites[0]->getWebsiteRole());
        $this->assertSame('Publisher’s corporate website', $productWebsites[0]->getWebsiteRoleDesc());

        $this->assertSame("Publisher's website", $productWebsites[0]->getProductWebsiteDescription());
        $this->assertSame('www.rangjung.com', $productWebsites[0]->getProductWebsiteLink());
    }

    /** @test */
    public function it_can_get_copyrightStatement()
    {
        $copyrightStatements = $this->product->getCopyrightStatement();

        $this->assertCount(1, $copyrightStatements);

        $this->assertSame('2019', $copyrightStatements[0]->getCopyrightYear());

        $copyrightOwners = $copyrightStatements[0]->getCopyrightOwner();

        $this->assertCount(1, $copyrightOwners);

        $this->assertSame('San Antonio Tricentennial Commission', $copyrightOwners[0]->getPersonName());
    }

    /** @test */
    public function it_can_get_productFormFeature()
    {
        $productFormFeature = $this->product->getProductFormFeatures();

        $this->assertCount(2, $productFormFeature);

        $this->assertSame('13', $productFormFeature[0]->getProductFormFeatureType());
        $this->assertSame('EU Toy Safety Hazard warning', $productFormFeature[0]->getProductFormFeatureTypeDesc());

        $this->assertSame('04', $productFormFeature[0]->getProductFormFeatureValue());
        $this->assertSame('', $productFormFeature[0]->getProductFormFeatureValueDesc());

        $this->assertSame('Contains a Small Ball', $productFormFeature[0]->getProductFormFeatureDescription());
    }

    /** @test */
    public function it_can_get_complexity()
    {
        $complexity = $this->product->getComplexity();

        $this->assertCount(1, $complexity);

        $this->assertSame('06', $complexity[0]->getComplexitySchemeIdentifier());
        $this->assertSame('Lexile measure', $complexity[0]->getComplexitySchemeIdentifierDesc());

        $this->assertSame('980L', $complexity[0]->getComplexityCode());
    }

    /** @test */
    public function it_can_get_marketRepresentations()
    {
        $marketRepresentations = $this->product->getMarketRepresentation();

        $this->assertCount(1, $marketRepresentations);

        $agentIdentifier = $marketRepresentations[0]->getAgentIdentifier();
        $marketDates = $marketRepresentations[0]->getMarketDate();

        $this->assertSame('06', $agentIdentifier->getAgentIDType());
        $this->assertSame('GLN', $agentIdentifier->getAgentIDTypeDesc());
        $this->assertSame('John Wiley & Sons', $marketRepresentations[0]->getAgentName());
        $this->assertSame('05', $marketRepresentations[0]->getAgentRole());
        $this->assertSame('Exclusive sales agent', $marketRepresentations[0]->getAgentRoleDesc());
        $this->assertCount(1, $marketDates);
        $this->assertSame('01', $marketDates[0]->getMarketDateRole());
        $this->assertSame('Publication date', $marketDates[0]->getMarketDateRoleDesc());
        $this->assertSame('20071002', $marketDates[0]->getDate());
    }

    /** @test */
    public function it_can_get_relatedProduct()
    {
        $relatedProducts = $this->product->getRelatedProducts();

        $this->assertCount(1, $relatedProducts);

        $productIdentifiers = array_values($relatedProducts[0]->getProductIdentifiers());

        $productFormDetails = $relatedProducts[0]->getProductFormDetail();

        $this->assertSame('27', $relatedProducts[0]->getRelationCode());
        $this->assertSame('Electronic version available as', $relatedProducts[0]->getRelationCodeDesc());
        $this->assertCount(1, $productIdentifiers);
        $this->assertSame('15', $productIdentifiers[0]->getProductIDType());
        $this->assertSame('ISBN-13', $productIdentifiers[0]->getProductIDTypeDesc());
        $this->assertSame('9780393079739', $productIdentifiers[0]->getIDValue());
        $this->assertSame('DG', $relatedProducts[0]->getProductForm());
        $this->assertSame('Electronic book text', $relatedProducts[0]->getProductFormDesc());
        $this->assertSame('029', $relatedProducts[0]->getEpubType());
        $this->assertSame('EPUB', $relatedProducts[0]->getEpubTypeDesc());
        $this->assertCount(1, $productFormDetails);
        $this->assertSame('B510', $productFormDetails[0]->code());
        $this->assertSame('Rough front', $productFormDetails[0]->desc());
        $this->assertSame('Student Ancillary', $relatedProducts[0]->getProductFormDescription());
    }

    /** @test */
    public function it_can_get_initialPrintRun()
    {
        $this->assertSame('10000', $this->product->getInitialPrintRun());
    }

    /** @test */
    public function it_can_get_mediaFile()
    {
        $mediaFiles = $this->product->getMediaFiles();

        $this->assertCount(1, $mediaFiles);

        $this->assertSame('04', $mediaFiles[0]->getMediaFileTypeCode());
        $this->assertSame('Image: front cover', $mediaFiles[0]->getMediaFileTypeCodeDesc());
        $this->assertSame('03', $mediaFiles[0]->getMediaFileFormatCode());
        $this->assertSame('JPEG', $mediaFiles[0]->getMediaFileFormatCodeDesc());
        $this->assertSame('01', $mediaFiles[0]->getMediaFileLinkTypeCode());
        $this->assertSame('URL', $mediaFiles[0]->getMediaFileLinkTypeCodeDesc());
        $this->assertSame('9782898020537_FC.jpg', $mediaFiles[0]->getMediaFileLink());
        $this->assertSame('20190228', $mediaFiles[0]->getMediaFileDate());
        $this->assertSame('Cover design by Eleanor Rose | Cover image from Pixabay', $mediaFiles[0]->getDownloadCredit());
    }
}