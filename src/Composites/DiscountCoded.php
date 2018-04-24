<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList100DiscountCodeType;

class DiscountCoded extends Composite
{
    /** @var CodeInList */
    protected $DiscountCodeType;
    /** @var string */
    protected $discountCodeTypeName = '';
    /** @var string */
    protected $discountCode = '';

    /**
     * @see [BIC > EDI/E-commerce > Discount Group Codes](http://www.bic.org.uk/13/Discount-Group-Codes/)
     */
    protected const TYPE_OF_BIC_DISCOUNT_GROUP_CODES = '01';

    public function getDiscountCodeType(): string
    {
        return $this->DiscountCodeType ? $this->DiscountCodeType->code() : '';
    }

    public function getDiscountCodeTypeDesc(): string
    {
        return $this->DiscountCodeType ? $this->DiscountCodeType->desc() : '';
    }

    public function setDiscountCodeType(string $code): void
    {
        $this->DiscountCodeType = new CodeInList(CodeList100DiscountCodeType::class, $code);
    }

    public function getDiscountCodeTypeName(): string
    {
        return $this->discountCodeTypeName;
    }

    public function setDiscountCodeTypeName(string $discountCodeTypeName): void
    {
        $this->discountCodeTypeName = $discountCodeTypeName;
    }

    public function getDiscountCode(): string
    {
        return $this->discountCode;
    }

    public function setDiscountCode(string $discountCode): void
    {
        $this->discountCode = $discountCode;
    }

    public function getDiscountCodePublisherPart(): string
    {
        return substr($this->discountCode, 1, 4);
    }

    public function getDiscountCodeDiscountPart(): string
    {
        return substr($this->discountCode, 5);
    }
}