<?php

namespace AragornYang\Onix\CodeLists;

class CodeList176ProductFormFeatureValueOperatingSystem extends CodeList
{
    public const KEY = 'ProductFormFeatureValueOperatingSystem';

    protected const MAPPING = [
        // An Open Source mobile device operating system originally developed by Google and supported by the Open Handset Alliance
        "01" => "Android",
        // A proprietary operating system supplied by Research In Motion for its BlackBerry handheld devices
        "02" => "BlackBerry OS",
        // A proprietary operating system based on Mac OS X supplied by Apple for its iPhone, iPad and iPod Touch handheld devices
        "03" => "iOS",
        // An operating system based on the Linux kernel
        "04" => "Linux",
        /* [A proprietary operating system supplied by Apple on Macintosh computers up to 2002] DEPRECATED – use code 13 for all Mac
					OS versions */
        "05" => "Mac OS",
        /* [A proprietary operating system supplied by Apple on Macintosh computers from 2001/2002] DEPRECATED – use code 13 for all
					Mac OS versions */
        "06" => "Mac OS X",
        // A proprietary operating system (AKA Garnet OS) originally developed for handheld devices
        "07" => "Palm OS",
        // A proprietry Linux-based operating system for handheld devices, originally developed by Palm (now owned by LG)
        "08" => "webOS",
        /* An operating system for hand-held devices, originally developed as a proprietary system, but planned to become wholly Open
					Source by 2010 */
        "09" => "Symbian",
        // A proprietary operating system supplied by Microsoft
        "10" => "Windows",
        // A proprietary operating system (AKA Windows Embedded Compact, WinCE) supplied by Microsoft for small-scale devices
        "11" => "Windows CE",
        // A proprietary operating system supplied by Microsoft for mobile devices
        "12" => "Windows Mobile",
        // A proprietary operating system supplied by Apple on Macintosh computers
        "13" => "Mac OS",
        // A proprietary operating system supplied by Microsoft for mobile devices, successor to Windows Mobile
        "14" => "Windows Phone 7",
    ];
}