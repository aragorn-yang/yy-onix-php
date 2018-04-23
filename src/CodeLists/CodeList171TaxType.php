<?php

namespace AragornYang\Onix\CodeLists;

class CodeList171TaxType extends CodeList
{
    public const KEY = 'TaxType';

    protected const MAPPING = [
        // Value-added tax (TVA, IVA, MwSt etc)
        "01" => "VAT",
        // General sales tax
        "02" => "GST",
        /* ‘Green’ or eco-tax, levied to encourage responsible production or disposal, used only where this is identified separately
					from value-added or sales taxes */
        "03" => "ECO",
    ];
}