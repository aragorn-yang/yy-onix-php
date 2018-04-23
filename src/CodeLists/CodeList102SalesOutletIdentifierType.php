<?php

namespace AragornYang\Onix\CodeLists;

class CodeList102SalesOutletIdentifierType extends CodeList
{
    public const KEY = 'SalesOutletIdentifierType';

    protected const MAPPING = [
        // Proprietary list of retail and other end-user sales outlet IDs. Note that <IDTypeName> is required with proprietary identifiers
        "01" => "Proprietary",
        // DEPRECATED – use code 03
        "02" => "BIC sales outlet ID code",
        // Use with ONIX retail and other end-user sales outlet IDs from List 139
        "03" => "ONIX retail sales outlet ID code",
    ];
}