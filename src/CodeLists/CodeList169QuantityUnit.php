<?php

namespace AragornYang\Onix\CodeLists;

class CodeList169QuantityUnit extends CodeList
{
    public const KEY = 'QuantityUnit';

    protected const MAPPING = [
        // The quantity refers to a unit implied by the quantity type
        "00" => "Units",
        // 
        "07" => "Days",
        // 
        "08" => "Weeks",
        // 
        "09" => "Months",
        // 
        "10" => "Years",
    ];
}