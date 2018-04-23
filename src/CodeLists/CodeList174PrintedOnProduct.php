<?php

namespace AragornYang\Onix\CodeLists;

class CodeList174PrintedOnProduct extends CodeList
{
    public const KEY = 'PrintedOnProduct';

    protected const MAPPING = [
        // Price not printed on product
        "01" => "No",
        // Price printed on product
        "02" => "Yes",
    ];
}