<?php

namespace AragornYang\Onix\CodeLists;

class CodeList22LanguageRole extends CodeList
{
    public const KEY = 'LanguageRole';

    protected const MAPPING = [
        // 
        "01" => "Language of text",
        // Where the text in the original language is NOT part of the current product
        "02" => "Original language of a translated text",
        // Where different from language of text: used mainly for serials
        "03" => "Language of abstracts",
        // Language to which specified rights apply
        "04" => "Rights language",
        // Language to which specified rights do not apply
        "05" => "Rights-excluded language",
        // Where the text in the original language is part of a bilingual or multilingual product
        "06" => "Original language in a multilingual edition",
        // Where the text in a translated language is part of a bilingual or multilingual product
        "07" => "Translated language in a multilingual edition",
        /* For example, on a DVD. Use for the only available audio track, or for an alternate language audio track when the original
					language audio is also present (code 11), or is missing (code 10) */
        "08" => "Language of audio track",
        // For example, on a DVD
        "09" => "Language of subtitles",
        // Where the audio in the original language is NOT part of the current product
        "10" => "Language of original audio track",
        // Where the audio in the original language is part of a multilingual product with multiple audio tracks
        "11" => "Original language audio track in a multilingual product",
        /* Use for the language of footnotes, endnotes, annotations or commentary, where it is different from the language of the main
					text */
        "12" => "Language of notes",
    ];
}