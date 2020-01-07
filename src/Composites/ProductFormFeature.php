<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList;
use AragornYang\Onix\CodeLists\CodeList79ProductFormFeatureType;
use AragornYang\Onix\CodeLists\CodeList98ProductFormFeatureValueBindingOrPageEdgeColor;
use AragornYang\Onix\CodeLists\CodeList99ProductFormFeatureValueSpecialCoverMaterial;
use AragornYang\Onix\CodeLists\CodeList76ProductFormFeatureValueDVDRegionCodes;
use AragornYang\Onix\CodeLists\CodeList176ProductFormFeatureValueOperatingSystem;

class ProductFormFeature extends Composite
{
    /** @var CodeInList */
    protected $productFormFeatureType;

    /** @var CodeInList */
    protected $productFormFeatureValue;

    /** @var string */
    protected $productFormFeatureDescription = '';

    public function getProductFormFeatureType(): string
    {
        return $this->productFormFeatureType ? $this->productFormFeatureType->code() : '';
    }

    public function getProductFormFeatureTypeDesc(): string
    {
        return $this->productFormFeatureType ? $this->productFormFeatureType->desc() : '';
    }

    protected function getCodelistByProductFormFeatureType($code)
    {
        switch ($code) {
            case '01'://Color of cover
            case '02'://Color of page edge
                $codeList = CodeList98ProductFormFeatureValueBindingOrPageEdgeColor::class;
                break;
            //case '03'://Text font
            //    $codeList = $code;
            //    break;
            case '04'://Special cover material
                $codeList = CodeList99ProductFormFeatureValueSpecialCoverMaterial::class;
                break;
            case '05'://DVD region
                $codeList = CodeList76ProductFormFeatureValueDVDRegionCodes::class;
                break;
            case '06':
                $codeList = CodeList176ProductFormFeatureValueOperatingSystem::class;
                break;
            default:
                $codeList = $code;
                break;
        }

        return $codeList;
    }

    public function setProductFormFeatureType(string $code): void
    {
        $this->productFormFeatureType = new CodeInList(CodeList79ProductFormFeatureType::class, $code);
    }

    public function setProductFormFeatureValue(string $code): void
    {
        $codeList = $this->getCodelistByProductFormFeatureType($this->getProductFormFeatureType());

        if (strpos($codeList, 'CodeLists')) {
            $this->productFormFeatureValue = new CodeInList($codeList, $code);
        } else {
            $this->productFormFeatureValue = $code;
        }
    }

    public function getProductFormFeatureValue(): string
    {
        $value = $this->productFormFeatureValue;
        if (is_object($value)) {
            return $this->productFormFeatureValue->code();
        } else {
            return $this->productFormFeatureValue;
        }
    }

    public function getProductFormFeatureValueDesc(): string
    {
        $value = $this->productFormFeatureValue;
        if (is_object($value)) {
            return $this->productFormFeatureValue->desc();
        } else {
            return '';
        }
    }

    public function setProductFormFeatureDescription(string $value): void
    {
        $this->productFormFeatureDescription = $value;
    }

    public function getProductFormFeatureDescription(): string
    {
        return $this->productFormFeatureDescription;
    }
}