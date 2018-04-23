<?php

namespace AragornYang\Onix\CodeLists;

class CodeList8BookFormDetail extends CodeList
{
    public const KEY = 'BookFormDetail';

    protected const MAPPING = [
        // DEPRECATED
        "01" => "A-format paperback",
        // ‘B’ format paperback: UK 198 x 129 mm – DEPRECATED
        "02" => "B-format paperback",
        // ‘C’ format paperback: UK 216 x 135 mm – DEPRECATED
        "03" => "C-format paperback",
        // DEPRECATED
        "04" => "Paper over boards",
        // DEPRECATED
        "05" => "Cloth",
        // DEPRECATED
        "06" => "With dust jacket",
        // DEPRECATED
        "07" => "Reinforced binding",
    ];
}