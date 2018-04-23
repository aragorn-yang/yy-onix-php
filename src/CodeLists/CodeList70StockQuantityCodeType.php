<?php

namespace AragornYang\Onix\CodeLists;

class CodeList70StockQuantityCodeType extends CodeList
{
    public const KEY = 'StockQuantityCodeType';

    protected const MAPPING = [
        // As specified in <StockQuantityCodeTypeName>
        "01" => "Proprietary",
        // Code scheme defined by the Australian Publishers Association
        "02" => "APA stock quantity code",
    ];
}