<?php

namespace AragornYang\Onix\Tests\features\V30;

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\Composites\SupplyDetail;

/**
 * @property Product $product
 */
trait SampleOnixFile30
{
    /** @test */
    public function it_can_parse_the_sample_file(): void
    {
        $this->assertCount(1, static::$products);
        $this->assertInstanceOf(Product::class, $this->product);
    }

    /** @test */
    public function it_is_version_30(): void
    {
        $this->assertSame('3.0', static::$parser->onixVersion());
    }

    /** @test */
    public function it_can_get_isbn(): void
    {
        $this->assertSame('9780080446844', $this->product->getIsbn13());
    }

    /** @test */
    public function it_can_get_product_form(): void
    {
        $this->assertSame('BC', $this->product->getProductForm());
        $this->assertSame('Paperback / softback', $this->product->getProductFormDesc());
    }

    /** @test */
    public function it_can_get_recordReference()
    {
        $this->assertSame('9780080446844', $this->product->getRecordReference());
    }

    /** @test */
    public function it_can_get_notificationType()
    {
        $this->assertSame('03', $this->product->getNotificationType());
        $this->assertSame('Notification confirmed on publication', $this->product->getNotificationTypeDesc());
    }

    /** @test */
    public function it_can_get_recordSourceType()
    {
        $this->assertSame('01', $this->product->getRecordSourceType());
        $this->assertSame('Publisher', $this->product->getRecordSourceTypeDesc());
    }

    /** @test */
    public function it_can_get_recordSourceName()
    {
        $this->assertSame('Elsevier', $this->product->getRecordSourceName());
    }

    /** @test */
    public function it_can_get_Barcode()
    {
        $barcodes = $this->product->getBarcodes();

        $this->assertSame('02', $barcodes[0]->getBarcodeType());
        $this->assertSame('GTIN-13', $barcodes[0]->getBarcodeTypeDesc());
        $this->assertSame('00', $barcodes[0]->getPositionOnProduct());
        $this->assertSame('Unknown / unspecified', $barcodes[0]->getPositionOnProductDesc());
    }

    /** @test */
    public function it_can_get_descriptiveDetail()
    {
        $descriptiveDetail = $this->product->getDescriptiveDetail();
        $titleDetails = $descriptiveDetail->getTitleDetails();
        $titleElements = $titleDetails[0]->getTitleElements();
        $measures = $descriptiveDetail->getMeasures();
        $languages = $descriptiveDetail->getLanguages();
        $extents = $descriptiveDetail->getExtent();
        $subjects = $descriptiveDetail->getSubjects();
        $audiences = $descriptiveDetail->getAudiences();
        $collections = $descriptiveDetail->getCollections();
        $titleDetails = $collections[0]->getTitleDetails();
        $collectionTitleElements = $titleDetails[0]->getTitleElements();

        $this->assertSame('00', $descriptiveDetail->getProductComposition());
        $this->assertSame('Single-item retail product', $descriptiveDetail->getProductCompositionDesc());

        $this->assertCount(1, $titleDetails);
        $this->assertSame('01', $titleDetails[0]->getTitleType());

        $this->assertSame('01', $titleElements[0]->getTitleElementLevel());
        $this->assertSame('Product', $titleElements[0]->getTitleElementLevelDesc());
        $this->assertSame('Pain', $titleElements[0]->getTitleText());
        $this->assertSame('Best Practice & Research Compendium', $titleElements[0]->getSubtitle());

        $this->assertSame('01', $measures[0]->getMeasureType());
        $this->assertSame('Height', $measures[0]->getMeasureTypeDesc());
        $this->assertSame(11.0, $measures[0]->getMeasurement());
        $this->assertSame('in', $measures[0]->getMeasureUnitCode());
        $this->assertSame('Inches (US)', $measures[0]->getMeasureUnitCodeDesc());

        $this->assertSame('GB', $descriptiveDetail->getCountryOfManufacture());
        $this->assertSame('United Kingdom', $descriptiveDetail->getCountryOfManufactureDesc());

        $this->assertSame('eng', $languages[0]->getLanguageCode());
        $this->assertSame('01', $languages[0]->getLanguageRole());
        $this->assertSame('Language of text', $languages[0]->getLanguageRoleDesc());

        $this->assertSame('05', $extents[0]->getExtentType());
        $this->assertSame('Total numbered pages', $extents[0]->getExtentTypeDesc());
        $this->assertSame('384', $extents[0]->getExtentValue());
        $this->assertSame('03', $extents[0]->getExtentUnit());
        $this->assertSame('Pages', $extents[0]->getExtentUnitDesc());

        $this->assertSame('10', $subjects[0]->getSubjectSchemeIdentifier());
        $this->assertSame('BISAC Subject Heading', $subjects[0]->getSubjectSchemeIdentifierDesc());
        $this->assertSame('MED083000', $subjects[0]->getSubjectCode());

        $this->assertSame('01', $audiences[0]->getAudienceCodeType());
        $this->assertSame('ONIX audience codes', $audiences[0]->getAudienceCodeTypeDesc());
        $this->assertSame('05', $audiences[0]->getAudienceCodeValue());

        $this->assertSame('10', $collections[0]->getCollectionType());
        $this->assertSame('Publisher collection', $collections[0]->getCollectionTypeDesc());

        $this->assertSame('01', $titleDetails[0]->getTitleType());
        $this->assertSame('Distinctive title (book); Cover title (serial); Title on item (serial content item or reviewed resource)', $titleDetails[0]->getTitleTypeDesc());
        $this->assertSame('02', $collectionTitleElements[0]->getTitleElementLevel());
        $this->assertSame('Collection level', $collectionTitleElements[0]->getTitleElementLevelDesc());
        $this->assertSame('Master Medicine', $collectionTitleElements[0]->getTitleText());
    }

    /** @test */
    public function it_can_get_CollateralDetail()
    {
        $collateralDetail = $this->product->getCollateralDetail();
        $textContents = $collateralDetail->getTextContents();

        $this->assertSame('03', $textContents[0]->getTextType());
        $this->assertSame('Description', $textContents[0]->getTextTypeDesc());
        $this->assertSame('00', $textContents[0]->getContentAudience());
        $this->assertSame('Unrestricted', $textContents[0]->getContentAudienceDesc());
        $this->assertSame('This prestigious text', substr($textContents[0]->getText(), 0, 21));
    }

    /** @test */
    public function it_can_get_publishingDetail()
    {
        $publishingDetail = $this->product->getPublishingDetail();
        $imprints = $publishingDetail->getImprints();
        $imprintIdentifier = $imprints[0]->getImprintIdentifier();
        $publishers = $publishingDetail->getPublishers();

        $this->assertSame('01', $imprintIdentifier[0]->getImprintIDType());
        $this->assertSame('Proprietary', $imprintIdentifier[0]->getImprintIDTypeDesc());
        $this->assertSame('ElsevierImprintCode', $imprintIdentifier[0]->getIDTypeName());
        $this->assertSame('ELSEVIER', $imprintIdentifier[0]->getIDValue());

        $this->assertSame('Elsevier', $imprints[0]->getImprintName());

        $this->assertSame('01', $publishers[0]->getPublishingRole());
        $this->assertSame('Publisher', $publishers[0]->getPublishingRoleDesc());
        $this->assertSame('Elsevier Health Sciences', $publishers[0]->getPublisherName());

        $this->assertSame('GB', $publishingDetail->getCountryOfPublication());
        $this->assertSame('United Kingdom', $publishingDetail->getCountryOfPublicationDesc());
    }

    /** @test */
    public function it_can_get_relatedMaterial()
    {
        $relatedMaterial = $this->product->getRelatedMaterial();
        $relatedWorks = $relatedMaterial->getRelatedWorks();
        $workIdentifiers = $relatedWorks[0]->getWorkIdentifiers();

        $this->assertSame('02', $relatedWorks[0]->getWorkRelationCode());
        $this->assertSame('Derived from', $relatedWorks[0]->getWorkRelationCodeDesc());

        $this->assertSame('15', $workIdentifiers[0]->getWorkIDType());
        $this->assertSame('ISBN-13', $workIdentifiers[0]->getWorkIDTypeDesc());
        $this->assertSame('9780080446844', $workIdentifiers[0]->getIDValue());
    }

    /** @test */
    public function it_can_get_productSupply()
    {
        $productSupply = $this->product->getProductSupply();
        $supplyDetails = $productSupply->getSupplyDetails();
        $suppliers = $supplyDetails[0]->getSuppliers();
        $supplyDates = $supplyDetails[0]->getSupplyDates();

        $this->assertSame('01', $suppliers[0]->getSupplierRole());
        $this->assertSame('Publisher to retailers', $suppliers[0]->getSupplierRoleDesc());
        $this->assertSame('Elsevier Health Sciences', $suppliers[0]->getSupplierName()[0]);

        $this->assertSame('08', $supplyDates[0]->getSupplyDateRole());
        $this->assertSame('Expected availability date', $supplyDates[0]->getSupplyDateRoleDesc());
        $this->assertSame('20070327', $supplyDates[0]->getDate());
    }

    /** @test */
    public function it_can_get_title(): void
    {
        $this->markTestSkipped();
        $this->assertSame('British English, A to Zed', $this->product->getTitle());
    }

    /** @test */
    public function it_can_get_author(): void
    {
        $this->markTestSkipped();
        $this->assertSame('Schur, Norman W', $this->product->getAuthor()->getPersonNameInverted());
    }

    /** @test */
    public function it_can_get_EditionTypeCode(): void
    {
        $this->markTestSkipped();
        $this->assertSame('REV', $this->product->getEditionTypeCode());
    }

    /** @test */
    public function it_can_get_EditionNumber(): void
    {
        $this->markTestSkipped();
        $this->assertSame('3', $this->product->getEditionNumber());
    }

    /** @test */
    public function it_can_get_Language(): void
    {
        $this->markTestSkipped();
        $this->assertSame('eng', $this->product->getLanguageCode());
    }

    /** @test */
    public function it_can_get_NumberOfPages(): void
    {
        $this->markTestSkipped();
        $this->assertSame(493, $this->product->getNumberOfPages());
    }

    /** @test */
    public function it_can_get_BASICMainSubject(): void
    {
        $this->markTestSkipped();
        $this->assertSame('REF008000', $this->product->getBASICMainSubject());
    }

    /** @test */
    public function it_can_get_AudienceCode(): void
    {
        $this->markTestSkipped();
        $this->assertSame('01', $this->product->getAudienceCode());
    }

    /** @test */
    public function it_can_get_MainDescription(): void
    {
        $this->markTestSkipped();
        $this->assertSame(0, stripos($this->product->getMainDesc(),
            'BRITISH ENGLISH, A TO ZED is the thoroughly updated, revised, and expanded third edition of Norman'));
    }

    /** @test */
    public function it_can_get_ReviewQuote(): void
    {
        $this->markTestSkipped();
        $this->assertSame(0, stripos($this->product->getReviewQuotes()[0],
            'Norman Schur is without doubt the outstanding authority on the similarities and differences between'));
    }

    /** @test */
    public function it_can_get_imprint(): void
    {
        $this->markTestSkipped();
        $this->assertSame('Facts on File Publications', $this->product->getImprint());
    }

    /** @test */
    public function it_can_get_publisher(): void
    {
        $this->markTestSkipped();
        $this->assertSame('Facts on File Inc', $this->product->getPublisherNames());
    }

    /** @test */
    public function it_can_get_pub_date(): void
    {
        $this->markTestSkipped();
        $this->assertSame('1987', $this->product->getPublicationDate());
    }

    /** @test */
    public function it_can_get_measures(): void
    {
        $this->markTestSkipped();
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
        $this->assertCount(1, $this->product->getSupplyDetails());
        /** @var SupplyDetail $supplyDetail */
        $supplyDetail = $this->product->getSupplyDetails()[0];
        $this->assertSame('23', $supplyDetail->getProductAvailability());
        $price = $supplyDetail->getPrices()[0];
        $this->assertTrue($price->isRrpExcTax());
        $this->assertSame(76.95, $price->getPriceAmount());
    }
}