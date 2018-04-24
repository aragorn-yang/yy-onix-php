<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\ProductFeatures\HasAudienceCode;
use AragornYang\Onix\ProductFeatures\HasBASICMainSubject;
use AragornYang\Onix\ProductFeatures\HasContributors;
use AragornYang\Onix\ProductFeatures\HasEditionNumber;
use AragornYang\Onix\ProductFeatures\HasEditionTypeCode;
use AragornYang\Onix\ProductFeatures\HasImprints;
use AragornYang\Onix\ProductFeatures\HasLanguages;
use AragornYang\Onix\ProductFeatures\HasMeasures;
use AragornYang\Onix\ProductFeatures\HasNumberOfPages;
use AragornYang\Onix\ProductFeatures\HasOtherTexts;
use AragornYang\Onix\ProductFeatures\HasProductForm;
use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;
use AragornYang\Onix\ProductFeatures\HasPublicationDate;
use AragornYang\Onix\ProductFeatures\HasPublishers;
use AragornYang\Onix\ProductFeatures\HasRecordReference;
use AragornYang\Onix\ProductFeatures\HasSupplyDetails;
use AragornYang\Onix\ProductFeatures\HasTitles;

class Product extends Composite
{
    use HasAudienceCode,
        HasBASICMainSubject,
        HasContributors,
        HasEditionNumber,
        HasEditionTypeCode,
        HasImprints,
        HasLanguages,
        HasMeasures,
        HasNumberOfPages,
        HasOtherTexts,
        HasProductForm,
        HasProductIdentifiers,
        HasPublicationDate,
        HasPublishers,
        HasRecordReference,
        HasSupplyDetails,
        HasTitles;
}