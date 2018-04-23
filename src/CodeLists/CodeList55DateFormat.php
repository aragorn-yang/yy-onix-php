<?php

namespace AragornYang\Onix\CodeLists;

class CodeList55DateFormat extends CodeList
{
    public const KEY = 'DateFormat';

    protected const MAPPING = [
        // Year month day (default)
        "00" => "YYYYMMDD",
        // Year and month
        "01" => "YYYYMM",
        // Year and week number
        "02" => "YYYYWW",
        // Year and quarter (Q = 1, 2, 3, 4, with 1 = Jan to Mar)
        "03" => "YYYYQ",
        // Year and season (S = 1, 2, 3, 4, with 1 = ‘Spring’)
        "04" => "YYYYS",
        // Year
        "05" => "YYYY",
        // Spread of exact dates
        "06" => "YYYYMMDDYYYYMMDD",
        // Spread of months
        "07" => "YYYYMMYYYYMM",
        // Spread of week numbers
        "08" => "YYYYWWYYYYWW",
        // Spread of quarters
        "09" => "YYYYQYYYYQ",
        // Spread of seasons
        "10" => "YYYYSYYYYS",
        // Spread of years
        "11" => "YYYYYYYY",
        // For complex, approximate or uncertain dates
        "12" => "Text string",
        /* Exact time. Use ONLY when exact times with hour/minute precision are relevant. By default, time is local. Alternatively, the
					time may be suffixed with an optional ‘Z’ for UTC times, or with ‘+’ or ‘-’ and an hhmm timezone offset from UTC. Times without
					a timezone are ‘rolling’ local times, times qualified with a timezone (using Z, + or -) specify a particular instant in time */
        "13" => "YYYYMMDDThhmm",
        /* Exact time. Use ONLY when exact times with second precision are relevant. By default, time is local. Alternatively, the time
					may be suffixed with an optional ‘Z’ for UTC times, or with ‘+’ or ‘-’ and an hhmm timezone offset from UTC. Times without
					a timezone are ‘rolling’ local times, times qualified with a timezone (using Z, + or -) specify a particular instant in time */
        "14" => "YYYYMMDDThhmmss",
        // Year month day (Hijri calendar)
        "20" => "YYYYMMDD (H)",
        // Year and month (Hijri calendar)
        "21" => "YYYYMM (H)",
        // Year (Hijri calendar)
        "25" => "YYYY (H)",
        // For complex, approximate or uncertain dates (Hijri calendar), text would usually be in Arabic script
        "32" => "Text string (H)",
    ];
}