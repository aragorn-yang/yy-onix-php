<?php

namespace AragornYang\Onix\CodeLists;

class CodeList69AgentRole extends CodeList
{
    public const KEY = 'AgentRole';

    protected const MAPPING = [
        // Publisher’s exclusive sales agent in a specified territory
        "05" => "Exclusive sales agent",
        // Publisher’s non-exclusive sales agent in a specified territory
        "06" => "Non-exclusive sales agent",
        // Publisher for a specified territory
        "07" => "Local publisher",
        /* Publisher’s sales agent in a specific territory. Use only where exclusive / non-exclusive status is not known. Prefer 05 or
					06 as appropriate, where possible */
        "08" => "Sales agent",
    ];
}