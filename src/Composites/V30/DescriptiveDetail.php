<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\ProductFeatures\HasContributors;
use AragornYang\Onix\ProductFeatures\HasProductForm;
use AragornYang\Onix\ProductFeatures\V30\HasTitleDetails;

class DescriptiveDetail extends Composite
{
    use HasContributors, HasProductForm, HasTitleDetails;
}