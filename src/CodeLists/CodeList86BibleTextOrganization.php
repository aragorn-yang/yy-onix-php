<?php

namespace AragornYang\Onix\CodeLists;

class CodeList86BibleTextOrganization extends CodeList
{
    public const KEY = 'BibleTextOrganization';

    protected const MAPPING = [
        // A Bible with the text organized in the order in which events are believed to have happened
        "CHR" => "Chronological",
        // A Bible which explores keywords or themes by referring text to preceding or following text
        "CHA" => "Chain reference",
        /* A Bible or other text in which different versions are printed one line above the other, so that the variations can easily
					be detected */
        "INT" => "Interlinear",
        // A Bible with two or more versions printed side by side
        "PAR" => "Parallel",
        // A Bible in which the text is presented in the traditional order
        "STN" => "Standard",
    ];
}