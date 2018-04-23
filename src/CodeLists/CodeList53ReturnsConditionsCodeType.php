<?php

namespace AragornYang\Onix\CodeLists;

class CodeList53ReturnsConditionsCodeType extends CodeList
{
    public const KEY = 'ReturnsConditionsCodeType';

    protected const MAPPING = [
        // As specified in <ReturnsCodeTypeName> (ONIX 3.0 only)
        "00" => "Proprietary",
        /* Maintained by CLIL (Commission Interprofessionnel du Livre). Returns conditions values in <ReturnsCode> should be taken from
					the CLIL list */
        "01" => "French book trade returns conditions code",
        // Maintained by BISAC: Returns conditions values in <ReturnsCode> should be taken from List 66
        "02" => "BISAC Returnable Indicator code",
        /* NOT CURRENTLY USED – BIC has decided that it will not maintain a code list for this purpose, since returns conditions are
					usually at least partly based on the trading relationship */
        "03" => "UK book trade returns conditions code",
        // Returns conditions values in <ReturnsCode> should be taken from List 204
        "04" => "ONIX Returns conditions code",
    ];
}