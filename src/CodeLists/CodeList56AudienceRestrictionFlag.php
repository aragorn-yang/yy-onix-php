<?php

namespace AragornYang\Onix\CodeLists;

class CodeList56AudienceRestrictionFlag extends CodeList
{
    public const KEY = 'AudienceRestrictionFlag';

    protected const MAPPING = [
        // 
        "R" => "Restrictions apply, see note",
        // Indexed for the German market – in Deutschland indiziert
        "X" => "Indiziert",
    ];
}