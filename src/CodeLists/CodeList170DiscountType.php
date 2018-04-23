<?php

namespace AragornYang\Onix\CodeLists;

class CodeList170DiscountType extends CodeList
{
    public const KEY = 'DiscountType';

    protected const MAPPING = [
        // Discount applied to all units in a qualifying order
        "01" => "Rising discount",
        // Additional discount may be applied retrospectively, based on number of units ordered over a specific period
        "02" => "Rising discount (cumulative)",
        // Discount applied to marginal units in a qualifying order
        "03" => "Progressive discount",
        // Previous orders within a specific time period are counted when calculating a progressive discount
        "04" => "Progressive discount (cumulative)",
    ];
}