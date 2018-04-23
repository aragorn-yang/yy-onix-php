<?php

namespace AragornYang\Onix\CodeLists;

class CodeList203ONIXAdultAudienceRating extends CodeList
{
    public const KEY = 'ONIXAdultAudienceRating';

    protected const MAPPING = [
        // 
        "00" => "Unrated",
        // The publisher states that the product is suitable for any adult audience
        "01" => "Any adult audience",
        // The publisher warns the content may offend parts of the adult audience (for any reason)
        "02" => "Content warning",
        // The publisher warns the product includes content of an explicit sexual nature
        "03" => "Content warning (sex)",
        // The publisher warns the product includes content of an extreme violent nature
        "04" => "Content warning (violence)",
        // The publisher warns the product includes content involving severe misuse of drugs
        "05" => "Content warning (drug-taking)",
        // The publisher warns the product includes extreme / offensive / explicit language
        "06" => "Content warning (language)",
        /* The publisher warns the product includes content involving intolerance of particular groups (eg religious, ethnic, racial,
					social) */
        "07" => "Content warning (intolerance)",
    ];
}