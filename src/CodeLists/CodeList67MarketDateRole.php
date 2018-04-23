<?php

namespace AragornYang\Onix\CodeLists;

class CodeList67MarketDateRole extends CodeList
{
    public const KEY = 'MarketDateRole';

    protected const MAPPING = [
        /* The nominal date of publication in this market. If there is a strict embargo on retail sales before the expected date, it
					should be specified separately as an embargo date */
        "01" => "Publication date",
        /* If there is an embargo on retail sales in this market before a certain date, the date from which the embargo is lifted and
					retail sales are permitted */
        "02" => "Embargo date",
    ];
}