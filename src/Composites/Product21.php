<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\ProductFeatures\HasAudienceCode;
use AragornYang\Onix\ProductFeatures\HasAudiences;
use AragornYang\Onix\ProductFeatures\HasBarcode;
use AragornYang\Onix\ProductFeatures\HasBISACMainSubject;
use AragornYang\Onix\ProductFeatures\HasBISACVersion;
use AragornYang\Onix\ProductFeatures\HasBICMainSubject;
use AragornYang\Onix\ProductFeatures\HasBICVersion;
use AragornYang\Onix\ProductFeatures\HasCityOfPublication;
use AragornYang\Onix\ProductFeatures\HasContainedItems;
use AragornYang\Onix\ProductFeatures\HasContentItems;
use AragornYang\Onix\ProductFeatures\HasContributors;
use AragornYang\Onix\ProductFeatures\HasCountryOfPublication;
use AragornYang\Onix\ProductFeatures\HasEditionNumber;
use AragornYang\Onix\ProductFeatures\HasEditionStatement;
use AragornYang\Onix\ProductFeatures\HasEditionTypeCode;
use AragornYang\Onix\ProductFeatures\HasExpectedShipDate;
use AragornYang\Onix\ProductFeatures\HasIllustrationsNote;
use AragornYang\Onix\ProductFeatures\HasImprints;
use AragornYang\Onix\ProductFeatures\HasLanguages;
use AragornYang\Onix\ProductFeatures\HasMeasures;
use AragornYang\Onix\ProductFeatures\HasMediaFiles;
use AragornYang\Onix\ProductFeatures\HasNoContributor;
use AragornYang\Onix\ProductFeatures\HasNoEdition;
use AragornYang\Onix\ProductFeatures\HasNoSeries;
use AragornYang\Onix\ProductFeatures\HasNotificationType;
use AragornYang\Onix\ProductFeatures\HasNumberOfPages;
use AragornYang\Onix\ProductFeatures\HasOtherTexts;
use AragornYang\Onix\ProductFeatures\HasOutOfPrintDate;
use AragornYang\Onix\ProductFeatures\HasPrizes;
use AragornYang\Onix\ProductFeatures\HasProductForm;
use AragornYang\Onix\ProductFeatures\HasProductFormDescription;
use AragornYang\Onix\ProductFeatures\HasProductFormDetail;
use AragornYang\Onix\ProductFeatures\HasProductFormFeatures;
use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;
use AragornYang\Onix\ProductFeatures\HasPublicationDate;
use AragornYang\Onix\ProductFeatures\HasPublishers;
use AragornYang\Onix\ProductFeatures\HasPublishingStatus;
use AragornYang\Onix\ProductFeatures\HasRecordReference;
use AragornYang\Onix\ProductFeatures\HasRecordSourceType;
use AragornYang\Onix\ProductFeatures\HasRelatedProducts;
use AragornYang\Onix\ProductFeatures\HasSaleRights;
use AragornYang\Onix\ProductFeatures\HasSeries;
use AragornYang\Onix\ProductFeatures\HasSets;
use AragornYang\Onix\ProductFeatures\HasSubjects;
use AragornYang\Onix\ProductFeatures\HasSupplyDetails;
use AragornYang\Onix\ProductFeatures\HasTitles;
use AragornYang\Onix\ProductFeatures\HasWorkIdentifiers;
use AragornYang\Onix\ProductFeatures\HasYearFirstPublished;
use AragornYang\Onix\ProductFeatures\HasContributorStatement;
use AragornYang\Onix\ProductFeatures\HasRecordSourceName;
use AragornYang\Onix\ProductFeatures\HasTradeCategory;
use AragornYang\Onix\ProductFeatures\HasNumberOfPieces;
use AragornYang\Onix\ProductFeatures\HasExtents;
use AragornYang\Onix\ProductFeatures\HasCopyrightYears;
use AragornYang\Onix\ProductFeatures\HasNotForSales;
use AragornYang\Onix\ProductFeatures\HasProductContentType;
use AragornYang\Onix\ProductFeatures\HasAudienceRanges;
use AragornYang\Onix\ProductFeatures\HasIllustrations;
use AragornYang\Onix\productFeatures\HasNumberOfIllustrations;
use AragornYang\Onix\productFeatures\HasMainSubjects;
use AragornYang\Onix\productFeatures\HasProductPackaging;
use AragornYang\Onix\productFeatures\HasProductWebsites;
use AragornYang\Onix\productFeatures\HasCopyrightStatements;
use AragornYang\Onix\ProductFeatures\HasComplexitys;
use AragornYang\Onix\ProductFeatures\HasMarketRepresentations;
use AragornYang\Onix\ProductFeatures\HasInitialPrintRun;
use AragornYang\Onix\ProductFeatures\HasProductClassifications;
use AragornYang\Onix\ProductFeatures\HasPlaceAsSubjects;
use AragornYang\Onix\ProductFeatures\HasPagesArabic;
use AragornYang\Onix\ProductFeatures\HasPagesRoman;
use AragornYang\Onix\ProductFeatures\HasEpubType;
use AragornYang\Onix\ProductFeatures\HasEpubSource;
use AragornYang\Onix\ProductFeatures\HasEditionVersionNumber;

class Product21 extends Composite implements Product
{
    use HasAudienceCode,
        HasAudienceRanges,
        HasAudiences,
        HasBarcode,
        HasBISACMainSubject,
        HasBISACVersion,
        HasBICMainSubject,
        HasBICVersion,
        HasCityOfPublication,
        HasComplexitys,
        HasContainedItems,
        HasContentItems,
        HasContributors,
        HasContributorStatement,
        HasCopyrightStatements,
        HasCopyrightYears,
        HasCountryOfPublication,
        HasEditionNumber,
        HasEditionStatement,
        HasEditionTypeCode,
        HasEditionVersionNumber,
        HasEpubType,
        HasEpubSource,
        HasExpectedShipDate,
        HasExtents,
        HasIllustrations,
        HasIllustrationsNote,
        HasImprints,
        HasInitialPrintRun,
        HasLanguages,
        HasMainSubjects,
        HasMarketRepresentations,
        HasMeasures,
        HasMediaFiles,
        HasNoContributor,
        HasNoEdition,
        HasNoSeries,
        HasNotificationType,
        HasNumberOfIllustrations,
        HasNumberOfPages,
        HasNumberOfPieces,
        HasNotForSales,
        HasOtherTexts,
        HasOutOfPrintDate,
        HasPagesArabic,
        HasPagesRoman,
        HasPlaceAsSubjects,
        HasPrizes,
        HasProductForm,
        HasProductFormDescription,
        HasProductFormDetail,
        HasProductFormFeatures,
        HasProductIdentifiers,
        HasPublicationDate,
        HasPublishers,
        HasPublishingStatus,
        HasProductClassifications,
        HasProductContentType,
        HasProductPackaging,
        HasProductWebsites,
        HasRecordReference,
        HasRecordSourceName,
        HasRecordSourceType,
        HasRelatedProducts,
        HasSaleRights,
        HasSeries,
        HasSets,
        HasSubjects,
        HasSupplyDetails,
        HasTradeCategory,
        HasTitles,
        HasWorkIdentifiers,
        HasYearFirstPublished;

    /** @var string */
    protected $compositeName = 'Product';

}