<?php

namespace AragornYang\Onix\CodeLists;

class CodeList94DefaultLinearUnit extends CodeList
{
    public const KEY = 'DefaultLinearUnit';

    protected const MAPPING = [
        // Millimeters are the preferred metric unit of length
        "cm" => "Centimeters",
        // 
        "in" => "Inches (US)",
        // 
        "mm" => "Millimeters",
    ];
}