<?php

namespace AragornYang\Onix\CodeLists;

class CodeList138TransliterationScheme extends CodeList
{
    public const KEY = 'TransliterationScheme';

    protected const MAPPING = [
        // Transliteration of Cyrillic characters – Slavic languages
        "SFS4900" => "Finnish standard SFS 4900",
        // Transliteration and transcription of Greek characters
        "SFS5807" => "Finnish standard SFS 5807",
        // Transliteration of Arabic characters
        "SFS5755" => "Finnish standard SFS 5755",
        // Transliteration of Hebrew characters
        "SFS3602" => "Finnish standard SFS 5824",
        // Documentation – Romanization of Japanese (kana script)
        "ISO3602" => "ISO 3602",
        // Information and documentation – Romanization of Chinese
        "ISO7098" => "ISO 7098",
    ];
}