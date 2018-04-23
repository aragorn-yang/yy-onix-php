<?php

namespace AragornYang\Onix\CodeLists;

class CodeList20EventRole extends CodeList
{
    public const KEY = 'EventRole';

    protected const MAPPING = [
        // For example an academic, professional or political conference
        "01" => "Publication linked to conference",
        // 
        "02" => "Complete proceedings of conference",
        // 
        "03" => "Selected papers from conference",
        // For example a competitive match, fixture series or championship
        "11" => "Publication linked to sporting event",
        // 
        "12" => "Programme or guide for sporting event",
        // For example a theatrical or musical event or performance, a season of events or performances, or an exhibition of art
        "21" => "Publication linked to artistic event",
        // 
        "22" => "Programme or guide for artistic event",
        // For example a commercial exposition
        "31" => "Publication linked to exposition",
        // 
        "32" => "Programme or guide for exposition",
    ];
}