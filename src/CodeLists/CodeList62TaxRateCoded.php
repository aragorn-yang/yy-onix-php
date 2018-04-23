<?php

namespace AragornYang\Onix\CodeLists;

class CodeList62TaxRateCoded extends CodeList
{
    public const KEY = 'TaxRateCoded';

    protected const MAPPING = [
        // Specifies that tax is applied at a higher rate than standard
        "H" => "Higher rate",
        /* Under Italian tax rules, VAT on books may be paid at source by the publisher, and subsequent transactions through the supply
					chain are tax-exempt */
        "P" => "Tax paid at source (Italy)",
        // Specifies that tax is applied at a lower rate than standard
        "R" => "Lower rate",
        // 
        "S" => "Standard rate",
        // 
        "Z" => "Zero-rated",
    ];
}