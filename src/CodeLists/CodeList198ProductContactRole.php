<?php

namespace AragornYang\Onix\CodeLists;

class CodeList198ProductContactRole extends CodeList
{
    public const KEY = 'ProductContactRole';

    protected const MAPPING = [
        // Eg for requests for supply of mutable digital files for conversion to other formats
        "01" => "Accessibility request contact",
        // Eg for requests relating to interviews, author events
        "02" => "Promotional contact",
        // Eg for co-op advertising
        "03" => "Advertising contact",
        // Eg for requests for review copies
        "04" => "Review copy contact",
        // Eg for requests for approval or evaluation copies (particularly within education)
        "05" => "Evaluation copy contact",
        // Eg for requests to reproduce or repurpose parts of the publication
        "06" => "Permissions contact",
    ];
}