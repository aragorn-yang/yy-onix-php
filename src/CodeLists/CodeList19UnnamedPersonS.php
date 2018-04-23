<?php

namespace AragornYang\Onix\CodeLists;

class CodeList19UnnamedPersonS extends CodeList
{
    public const KEY = 'UnnamedPersonS';

    protected const MAPPING = [
        // 
        "01" => "Unknown",
        // 
        "02" => "Anonymous",
        // And others: additional contributors not listed
        "03" => "et al",
        // When the product is a pack of books by different authors
        "04" => "Various authors",
        // Use with Contributor role code E07 ‘read by’, for audio books for the blind
        "05" => "Synthesized voice – male",
        // Use with Contributor role code E07 ‘read by’, for audio books for the blind
        "06" => "Synthesized voice – female",
        // Use with Contributor role code E07 ‘read by’, for audio books for the blind
        "07" => "Synthesized voice – unspecified",
    ];
}