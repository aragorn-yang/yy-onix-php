<?php

namespace AragornYang\Onix\CodeLists;

class CodeList168PriceConditionQuantityType extends CodeList
{
    public const KEY = 'PriceConditionQuantityType';

    protected const MAPPING = [
        // The price condition quantity represents a time period
        "01" => "Time period",
        // The price condition quantity is a number of updates
        "02" => "Number of updates",
    ];
}