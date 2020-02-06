<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\ProductFeatures\HasDescriptiveDetail;
use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;
use AragornYang\Onix\ProductFeatures\HasProductSupply;
use AragornYang\Onix\ProductFeatures\HasRecordReference;

class Product30 extends Composite implements Product
{
    use
        HasDescriptiveDetail,
        HasProductIdentifiers,
        HasProductSupply,
        HasRecordReference;

    /** @var string */
    protected $compositeName = 'Product';
}