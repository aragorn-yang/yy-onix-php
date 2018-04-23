<?php

namespace AragornYang\Onix\CodeLists;

class CodeList154ContentAudience extends CodeList
{
    public const KEY = 'ContentAudience';

    protected const MAPPING = [
        // Any audience
        "00" => "Unrestricted",
        /* Distribution by agreement between the parties to the ONIX exchange (this value is provided to cover applications where ONIX
					content includes material which is not for general distribution) */
        "01" => "Restricted",
        // Distributors, bookstores, publisher’s own staff etc
        "02" => "Booktrade",
        // 
        "03" => "End-customers",
        // 
        "04" => "Librarians",
        // 
        "05" => "Teachers",
        // 
        "06" => "Students",
        // Press or other media
        "07" => "Press",
        // Where a specially formatted description is required for this audience
        "08" => "Shopping comparison service",
        // Text not intended for display, but may be used (in addition to any less restricted text) for indexing and search
        "09" => "Search engine index",
    ];
}