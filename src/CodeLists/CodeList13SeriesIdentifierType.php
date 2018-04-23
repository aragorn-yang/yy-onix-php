<?php

namespace AragornYang\Onix\CodeLists;

class CodeList13SeriesIdentifierType extends CodeList
{
    public const KEY = 'SeriesIdentifierType';

    protected const MAPPING = [
        // For example, publisher’s own series ID. Note that <IDTypeName> is required with proprietary identifiers
        "01" => "Proprietary",
        // International Standard Serial Number, unhyphenated, 8 digits
        "02" => "ISSN",
        // Maintained by the Deutsche Nationalbibliothek
        "03" => "German National Bibliography series ID",
        // Maintained by VLB
        "04" => "German Books in Print series ID",
        // Maintained by Electre Information, France
        "05" => "Electre series ID",
        // Digital Object Identifier (variable length and character set)
        "06" => "DOI",
        // Use only where the collection (series or set) is available as a single product
        "15" => "ISBN-13",
        // Uniform Resource Name
        "22" => "URN",
    ];
}