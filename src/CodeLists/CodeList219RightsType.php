<?php

namespace AragornYang\Onix\CodeLists;

class CodeList219RightsType extends CodeList
{
    public const KEY = 'RightsType';

    protected const MAPPING = [
        // Text or image copyright (normally indicated by the © symbol)
        "C" => "Copyright",
        // Phonogram copyright or neighbouring right (normally indicated by the ℗ symbol)
        "P" => "Phonogram right",
        // Sui generis database right
        "D" => "Database right",
    ];
}