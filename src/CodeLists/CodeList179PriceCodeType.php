<?php

namespace AragornYang\Onix\CodeLists;

class CodeList179PriceCodeType extends CodeList
{
    public const KEY = 'PriceCodeType';

    protected const MAPPING = [
        /* A publisher or retailer’s proprietary code list as specified in <PriceCodeTypeName> which identifies particular codes with
					particular price points, price tiers or bands */
        "01" => "Proprietary",
        // Price Code scheme for Finnish Pocket Books (Pokkareiden hintaryhmä). Price codes expressed as letters A–J in <PriceCode>
        "02" => "Finnish Pocket Book price code",
        // Price Code scheme for Finnish Miki Books (Miki-kirjojen hintaryhmä). Price codes expressed as an integer 1–n in <PriceCode>
        "03" => "Finnish Miki Book price code",
    ];
}