<?php

namespace AragornYang\Onix\CodeLists;

class CodeList16WorkIdentifierType extends CodeList
{
    public const KEY = 'WorkIdentifierType';

    protected const MAPPING = [
        // Note that <IDTypeName> is required with proprietary identifiers
        "01" => "Proprietary",
        /* 10-character ISBN of manifestation of work, when this is the only work identifier available – now DEPRECATED in ONIX for Books,
					except where providing historical information for compatibility with legacy systems. It should only be used in relation to
					products published before 2007 – when ISBN-13 superseded it – and should never be used as the ONLY identifier (it should always
					be accompanied by the correct GTIN-13 / ISBN-13 of the manifestation of the work) */
        "02" => "ISBN-10",
        // Digital Object Identifier (variable length and character set)
        "06" => "DOI",
        // International Standard Text Code (16 characters: numerals and letters A-F, unhyphenated)
        "11" => "ISTC",
        // 13-character ISBN of manifestation of work, when this is the only work identifier available
        "15" => "ISBN-13",
        // International Standard Recording Code
        "18" => "ISRC",
        // Global Library Manifestation Identifier, OCLC’s ‘manifestation cluster’ ID
        "32" => "GLIMIR",
        // OCLC Work Identifier
        "33" => "OWI",
    ];
}