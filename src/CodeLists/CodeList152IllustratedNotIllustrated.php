<?php

namespace AragornYang\Onix\CodeLists;

class CodeList152IllustratedNotIllustrated extends CodeList
{
    public const KEY = 'IllustratedNotIllustrated';

    protected const MAPPING = [
        // Not illustrated
        "01" => "No",
        // Illustrated
        "02" => "Yes",
    ];
}