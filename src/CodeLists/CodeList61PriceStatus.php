<?php

namespace AragornYang\Onix\CodeLists;

class CodeList61PriceStatus extends CodeList
{
    public const KEY = 'PriceStatus';

    protected const MAPPING = [
        // Default
        "00" => "Unspecified",
        // 
        "01" => "Provisional",
        // 
        "02" => "Firm",
    ];
}