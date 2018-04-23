<?php

namespace AragornYang\Onix\CodeLists;

class CodeList87BibleReferenceLocation extends CodeList
{
    public const KEY = 'BibleReferenceLocation';

    protected const MAPPING = [
        // References are printed in a narrow column in the center of the page between two columns of text
        "CCL" => "Center column",
        // References are printed at the foot of the page
        "PGE" => "Page end",
        // References are printed in a column to the side of the scripture
        "SID" => "Side column",
        // References are printed at the end of the applicable verse
        "VER" => "Verse end",
        // The person creating the ONIX record does not know where the references are located
        "UNK" => "Unknown",
        // Other locations not otherwise identified
        "ZZZ" => "Other",
    ];
}