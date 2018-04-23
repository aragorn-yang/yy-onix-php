<?php

namespace AragornYang\Onix\CodeLists;

class CodeList66BISACReturnableIndicator extends CodeList
{
    public const KEY = 'BISACReturnableIndicator';

    protected const MAPPING = [
        // 
        "N" => "No, not returnable",
        // 
        "Y" => "Yes, returnable, full copies only",
        // 
        "S" => "Yes, returnable, stripped cover",
        // Contact publisher for requirements and/or authorization
        "C" => "Conditional",
    ];
}