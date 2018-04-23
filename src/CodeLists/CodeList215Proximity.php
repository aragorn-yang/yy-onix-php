<?php

namespace AragornYang\Onix\CodeLists;

class CodeList215Proximity extends CodeList
{
    public const KEY = 'Proximity';

    protected const MAPPING = [
        // 
        "01" => "Less than",
        // 
        "02" => "Not more than",
        /* The supplier’s true figure, or at least a best estimate expected to be within 10% of the true figure (ie a quoted figure of
					100 could in fact be anything between 91 and 111) */
        "03" => "Exactly",
        /* Generally interpreted as within 25% of the true figure (ie a quoted figure of 100 could in fact be anything between 80 and
					133). The supplier may introduce a deliberate approximation to reduce the commercial sensitivity of the figure */
        "04" => "Approximately",
        /* Generally interpreted as within a factor of two of the true figure (ie a quoted figure of 100 could in fact be anything between
					50 and 200). The supplier may introduce a deliberate approximation to reduce the commercial sensitivity of the figure */
        "05" => "About",
        // 
        "06" => "Not less than",
        // 
        "07" => "More than",
    ];
}