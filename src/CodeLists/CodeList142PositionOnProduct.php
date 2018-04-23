<?php

namespace AragornYang\Onix\CodeLists;

class CodeList142PositionOnProduct extends CodeList
{
    public const KEY = 'PositionOnProduct';

    protected const MAPPING = [
        // Position unknown or unspecified
        "00" => "Unknown / unspecified",
        // The back cover of a book
        "01" => "Cover 4",
        // The inside back cover of a book
        "02" => "Cover 3",
        // The inside front cover of a book
        "03" => "Cover 2",
        // The front cover of a book
        "04" => "Cover 1",
        // The spine of a book
        "05" => "On spine",
        // Used only for boxed products
        "06" => "On box",
        // Used only for products fitted with hanging tags
        "07" => "On tag",
        // Not be used for books unless they are contained within outer packaging
        "08" => "On bottom",
        // Not be used for books unless they are contained within outer packaging
        "09" => "On back",
        // Used only for products packaged in outer sleeves
        "10" => "On outer sleeve / back",
        // Used only for products packaged in shrink-wrap or other removable wrapping
        "11" => "On removable wrapping",
    ];
}