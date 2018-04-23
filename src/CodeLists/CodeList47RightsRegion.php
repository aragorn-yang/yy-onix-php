<?php

namespace AragornYang\Onix\CodeLists;

class CodeList47RightsRegion extends CodeList
{
    public const KEY = 'RightsRegion';

    protected const MAPPING = [
        // 
        "000" => "World",
        // 
        "001" => "World except territories specified elsewhere in rights statements",
        // 
        "002" => "UK airports",
        // Use when an open market edition is published under its own ISBN
        "003" => "UK ‘open market’",
    ];
}