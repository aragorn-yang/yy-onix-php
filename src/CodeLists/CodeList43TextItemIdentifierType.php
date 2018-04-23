<?php

namespace AragornYang\Onix\CodeLists;

class CodeList43TextItemIdentifierType extends CodeList
{
    public const KEY = 'TextItemIdentifierType';

    protected const MAPPING = [
        // For example, a publisher’s own identifier. Note that <IDTypeName> is required with proprietary identifiers
        "01" => "Proprietary",
        // Formerly known as the EAN-13 (unhyphenated)
        "03" => "GTIN-13",
        // 
        "06" => "DOI",
        // Publisher item identifier
        "09" => "PII",
        // For serial items only
        "10" => "SICI",
        // 
        "11" => "ISTC",
        // (Unhyphenated)
        "15" => "ISBN-13",
    ];
}