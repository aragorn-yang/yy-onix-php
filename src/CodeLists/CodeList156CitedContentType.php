<?php

namespace AragornYang\Onix\CodeLists;

class CodeList156CitedContentType extends CodeList
{
    public const KEY = 'CitedContentType';

    protected const MAPPING = [
        // The full text of a review in a third-party publication in any medium
        "01" => "Review",
        // 
        "02" => "Bestseller list",
        // Other than a review
        "03" => "Media mention",
        // (North America) Inclusion in a program such as ‘Chicago Reads’, ‘Seattle Reads’
        "04" => "‘One locality, one book’ program",
    ];
}