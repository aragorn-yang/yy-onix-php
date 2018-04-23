<?php

namespace AragornYang\Onix\CodeLists;

class CodeList100DiscountCodeType extends CodeList
{
    public const KEY = 'DiscountCodeType';

    protected const MAPPING = [
        // UK publisher’s or distributor’s discount group code in a format specified by BIC to ensure uniqueness
        "01" => "BIC discount group code",
        /* A publisher’s or supplier’s own code which identifies a trade discount category, as specified in <DiscountCodeTypeName>. The
					actual discount for each code is set by trading partner agreement (applies to goods supplied on standard trade discounting
					terms) */
        "02" => "Proprietary discount code",
        // Terms code used in the Netherlands book trade
        "03" => "Boeksoort",
        // Terms code used in German ONIX applications
        "04" => "German terms code",
        /* A publisher’s or supplier’s own code which identifies a commission rate category, as specified in <DiscountCodeTypeName>.
					The actual commission rate for each code is set by trading partner agreement (applies to goods supplied on agency terms) */
        "05" => "Proprietary commission code",
        /* UK publisher’s or distributor’s commission group code in format specified by BIC to ensure uniqueness. Format is identical
					to BIC discount group code, but indicates a commission rather than a discount (applies to goods supplied on agency terms) */
        "06" => "BIC commission group code",
    ];
}