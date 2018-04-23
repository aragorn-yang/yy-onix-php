<?php

namespace AragornYang\Onix\CodeLists;

class CodeList173PriceDateRole extends CodeList
{
    public const KEY = 'PriceDateRole';

    protected const MAPPING = [
        // Date on which a price becomes effective
        "14" => "From date",
        // Date on which a price ceases to be effective
        "15" => "Until date",
        // Combines From date and Until date to define a period (both dates are inclusive). Use with for example dateformat 06
        "24" => "From… until date",
    ];
}