<?php

namespace AragornYang\Onix\CodeLists;

class CodeList60UnitOfPricing extends CodeList
{
    public const KEY = 'UnitOfPricing';

    protected const MAPPING = [
        // Default
        "00" => "Per copy of whole product",
        // 
        "01" => "Per page for printed loose-leaf content only",
    ];
}