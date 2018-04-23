<?php

namespace AragornYang\Onix\CodeLists;

class CodeList164WorkRelation extends CodeList
{
    public const KEY = 'WorkRelation';

    protected const MAPPING = [
        // Product X is or includes a manifestation of work Y
        "01" => "Manifestation of",
        /* Product X is or includes a manifestation of a work derived (directly) from related work Y in one or more of the ways specified
					in ISTC rules. This relation type is intended to enable products with a common ‘parent’ work to be linked without specifying
					the precise nature of their derivation */
        "02" => "Derived from",
        /* Product X is a manifestation of a work from which related work Y is (directly) derived in one or more of the ways specified
					in ISTC rules (reciprocal of code 02) */
        "03" => "Related work is derived from this",
        // Product X is a manifestation of a work in the same collection as related work Y
        "04" => "Other work in same collection",
        // Product X is a manifestation of a work by the same contributor(s) as related work Y
        "05" => "Other work by same contributor",
    ];
}