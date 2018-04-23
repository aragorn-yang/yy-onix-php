<?php

namespace AragornYang\Onix\CodeLists;

class CodeList18PersonOrganizationNameType extends CodeList
{
    public const KEY = 'PersonOrganizationNameType';

    protected const MAPPING = [
        // 
        "00" => "Unspecified",
        // May be used to give a well-known pseudonym, where the primary name is a ‘real’ name
        "01" => "Pseudonym",
        // 
        "02" => "Authority-controlled name",
        // Use only within <AlternativeName>
        "03" => "Earlier name",
        // May be used to identify a well-known real name, where the primary name is a pseudonym
        "04" => "‘Real’ name",
        // Use only within <AlternativeName>, when the primary name type is unspecified
        "05" => "Transliterated form of primary name",
        // Use only within <AlternativeName>
        "06" => "Later name",
    ];
}