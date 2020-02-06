<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList2ProductComposition;
use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\ProductFeatures\HasContributors;
use AragornYang\Onix\ProductFeatures\HasProductForm;
use AragornYang\Onix\ProductFeatures\V30\HasTitleDetails;

class DescriptiveDetail extends Composite
{
    use HasContributors, HasProductForm, HasTitleDetails;

    /** @var CodeInList */
    protected $productComposition;

    public function setProductComposition(string $code): void
    {
        $this->productComposition = new CodeInList(CodeList2ProductComposition::class, $code);
    }

    public function getProductComposition(): string
    {
        return $this->productComposition ? $this->productComposition->code() : '';
    }

    public function getProductCompositionDesc(): string
    {
        return $this->productComposition ? $this->productComposition->desc() : '';
    }
}