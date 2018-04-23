<?php

namespace AragornYang\Onix\CodeLists;

class CodeList159ResourceMode extends CodeList
{
    public const KEY = 'ResourceMode';

    protected const MAPPING = [
        // An executable together with data on which it operates
        "01" => "Application",
        // A sound recording
        "02" => "Audio",
        // A still image
        "03" => "Image",
        // Readable text, with or without associated images etc
        "04" => "Text",
        // Moving images, with or without accompanying sound
        "05" => "Video",
        // A website or other supporting resource delivering content in a variety of modes
        "06" => "Multi-mode",
    ];
}