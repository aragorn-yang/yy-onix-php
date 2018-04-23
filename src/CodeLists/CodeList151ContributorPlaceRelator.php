<?php

namespace AragornYang\Onix\CodeLists;

class CodeList151ContributorPlaceRelator extends CodeList
{
    public const KEY = 'ContributorPlaceRelator';

    protected const MAPPING = [
        // 
        "01" => "Born in",
        // 
        "02" => "Died in",
        // 
        "03" => "Formerly resided in",
        // 
        "04" => "Currently resides in",
        // 
        "05" => "Educated in",
        // 
        "06" => "Worked in",
        // (‘Floruit’)
        "07" => "Flourished in",
        // Or nationality. For use with country codes only
        "08" => "Citizen of",
    ];
}