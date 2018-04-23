<?php

namespace AragornYang\Onix\CodeLists;

class CodeList52SupplyToRegion extends CodeList
{
    public const KEY = 'SupplyToRegion';

    protected const MAPPING = [
        // When the same ISBN is used for open market and UK editions
        "004" => "UK ‘open market’",
    ];
}