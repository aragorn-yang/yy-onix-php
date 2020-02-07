<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\ProductFeatures\V30\HasBarcode;
use AragornYang\Onix\ProductFeatures\HasDescriptiveDetail;
use AragornYang\Onix\ProductFeatures\HasNotificationType;
use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;
use AragornYang\Onix\ProductFeatures\HasProductSupply;
use AragornYang\Onix\ProductFeatures\HasRecordReference;
use AragornYang\Onix\ProductFeatures\HasRecordSourceName;
use AragornYang\Onix\ProductFeatures\HasRecordSourceType;
use AragornYang\Onix\ProductFeatures\V30\HasCollateralDetail;

class Product30 extends Composite implements Product
{
    use
        HasBarcode,
        HasCollateralDetail,
        HasDescriptiveDetail,
        HasNotificationType,
        HasProductIdentifiers,
        HasProductSupply,
        HasRecordReference,
        HasRecordSourceName,
        HasRecordSourceType;

    /** @var string */
    protected $compositeName = 'Product';
}