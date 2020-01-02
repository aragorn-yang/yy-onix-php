<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList12TradeCategory;

trait HasTradeCategory
{
    /** @var CodeInList */
    protected $tradeCategory;

    public function getTradeCategory(): string
    {
        return $this->tradeCategory ? $this->tradeCategory->code() : '';
    }

    public function getTradeCategoryDesc(): string
    {
        return $this->tradeCategory ? $this->tradeCategory->desc() : '';
    }

    public function setTradeCategory(string $code): void
    {
        $this->tradeCategory = new CodeInList(CodeList12TradeCategory::class, $code);
    }
}