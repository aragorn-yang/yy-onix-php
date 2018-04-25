<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\ProductFeatures\HasAudienceCode;
use AragornYang\Onix\ProductFeatures\HasBASICMainSubject;
use AragornYang\Onix\ProductFeatures\HasBASICVersion;
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
use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;
use AragornYang\Onix\ProductFeatures\HasPublicationDate;
use AragornYang\Onix\ProductFeatures\HasPublishers;
use AragornYang\Onix\ProductFeatures\HasRecordReference;
use AragornYang\Onix\ProductFeatures\HasRecordSourceType;
use AragornYang\Onix\ProductFeatures\HasRelatedProducts;
use AragornYang\Onix\ProductFeatures\HasSaleRights;
use AragornYang\Onix\ProductFeatures\HasSeries;
use AragornYang\Onix\ProductFeatures\HasSets;
use AragornYang\Onix\ProductFeatures\HasSubjects;
use AragornYang\Onix\ProductFeatures\HasSupplyDetails;
use AragornYang\Onix\ProductFeatures\HasTitles;
use AragornYang\Onix\ProductFeatures\HasYearFirstPublished;

class Product extends Composite
{
    use HasAudienceCode,
        HasBASICMainSubject,
        HasBASICVersion,
        HasBICMainSubject,
        HasBICVersion,
        HasCityOfPublication,
        HasContainedItems,
        HasContentItems,
        HasContributors,
        HasCountryOfPublication,
        HasEditionNumber,
        HasEditionStatement,
        HasEditionTypeCode,
        HasExpectedShipDate,
        HasIllustrationsNote,
        HasImprints,
        HasLanguages,
        HasMeasures,
        HasMediaFiles,
        HasNoContributor,
        HasNoEdition,
        HasNoSeries,
        HasNotificationType,
        HasNumberOfPages,
        HasOtherTexts,
        HasOutOfPrintDate,
        HasPrizes,
        HasProductForm,
        HasProductFormDescription,
        HasProductIdentifiers,
        HasPublicationDate,
        HasPublishers,
        HasRecordReference,
        HasRecordSourceType,
        HasRelatedProducts,
        HasSaleRights,
        HasSeries,
        HasSets,
        HasSubjects,
        HasSupplyDetails,
        HasTitles,
        HasYearFirstPublished;
}