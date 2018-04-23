<?php

namespace AragornYang\Onix\CodeLists;

class CodeList28Audience extends CodeList
{
    public const KEY = 'Audience';

    protected const MAPPING = [
        // For a non-specialist adult audience
        "01" => "General/trade",
        // For a juvenile audience, not specifically for any educational purpose
        "02" => "Children/juvenile",
        // For a teenage audience, not specifically for any educational purpose
        "03" => "Young adult",
        // Kindergarten, pre-school, primary/elementary or secondary/high school education
        "04" => "Primary and secondary/elementary and high school",
        // For universities and colleges of further and higher education
        "05" => "College/higher education",
        // For an expert adult audience, including professional development and academic research
        "06" => "Professional and scholarly",
        // Intended for use in teaching English as a second language
        "07" => "ELT/ESL",
        // For centres providing academic, vocational or recreational courses for adults
        "08" => "Adult education",
        /* Intended for use in teaching second languages, for example teaching German to Spanish speakers. Prefer code 07 for products
					specific to teaching English */
        "09" => "Second language teaching",
    ];
}