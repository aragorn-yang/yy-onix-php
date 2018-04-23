<?php

namespace AragornYang\Onix\CodeLists;

class CodeList229GenderCodeBasedOnISO5218 extends CodeList
{
    public const KEY = 'GenderCodeBasedOnISO5218';

    protected const MAPPING = [
        // Provides positive indication that the gender is not known or is not specified by the sender for any reason
        "u" => "Unknown or unspecified",
        // 
        "f" => "Female",
        // 
        "m" => "Male",
    ];
}