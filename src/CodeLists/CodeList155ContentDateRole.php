<?php

namespace AragornYang\Onix\CodeLists;

class CodeList155ContentDateRole extends CodeList
{
    public const KEY = 'ContentDateRole';

    protected const MAPPING = [
        // Nominal date of publication (of the content item or supporting resource)
        "01" => "Publication date",
        // Date when a TV or radio program was / will be broadcast
        "04" => "Broadcast date",
        // Date from which a content item or supporting resource may be referenced or used. The content is embargoed until this date
        "14" => "From date",
        // Date until which a content item or supporting resource may be referenced or used
        "15" => "Until date",
        // Date when a resource was last changed or updated
        "17" => "Last updated",
        // Combines From date and Until date to define a period (both dates are inclusive). Use with for example dateformat 06
        "24" => "From… until date",
        /* Date from which a supporting resource is available for download. Note that this date also implies that it can be immediately
					displayed to the intended audience, unless a From date (code 14) is also supplied and is later than the Available from date */
        "27" => "Available from",
        /* Date until which a supporting resource is available for download. Note that this date does not imply it must be removed from
					display to the intended audience on this date – for this, use Until date (code 15) */
        "28" => "Available until",
    ];
}