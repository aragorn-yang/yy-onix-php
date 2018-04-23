<?php

namespace AragornYang\Onix\CodeLists;

class CodeList218LicenseExpressionType extends CodeList
{
    public const KEY = 'LicenseExpressionType';

    protected const MAPPING = [
        // Document (eg Word file, PDF or web page) Intended for the lay reader
        "01" => "Human readable",
        // Document (eg Word file, PDF or web page) Intended for the legal specialist reader
        "02" => "Professional readable",
        // 
        "10" => "ONIX-PL",
    ];
}