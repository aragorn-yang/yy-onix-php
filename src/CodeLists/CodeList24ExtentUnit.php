<?php

namespace AragornYang\Onix\CodeLists;

class CodeList24ExtentUnit extends CodeList
{
    public const KEY = 'ExtentUnit';

    protected const MAPPING = [
        // Words of natural language text
        "02" => "Words",
        // 
        "03" => "Pages",
        // 
        "04" => "Hours (integer and decimals)",
        // 
        "05" => "Minutes (integer and decimals)",
        // 
        "06" => "Seconds (integer only)",
        /* Of an audiobook on CD (or a similarly divided selection of audio files). Conventionally, each track is 3–6 minutes of running
					time, and track counts are misleading and inappropriate if the average track duration is significantly more or less than this.
					Note that track breaks are not necessarily aligned with structural breaks in the text (eg chapter breaks) */
        "11" => "Tracks",
        // Fill with leading zeroes if any elements are missing
        "14" => "Hours HHH",
        // Fill with leading zeroes if any elements are missing
        "15" => "Hours and minutes HHHMM",
        // Fill with leading zeroes if any elements are missing
        "16" => "Hours minutes seconds HHHMMSS",
        // 
        "17" => "Bytes",
        // 
        "18" => "Kbytes",
        // 
        "19" => "Mbytes",
    ];
}