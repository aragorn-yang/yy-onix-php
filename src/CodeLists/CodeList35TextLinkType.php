<?php

namespace AragornYang\Onix\CodeLists;

class CodeList35TextLinkType extends CodeList
{
    public const KEY = 'TextLinkType';

    protected const MAPPING = [
        // 
        "01" => "URL",
        // 
        "02" => "DOI",
        // 
        "03" => "PURL",
        // 
        "04" => "URN",
        // 
        "05" => "FTP address",
        // 
        "06" => "filename",
    ];
}