<?php

namespace AragornYang\Onix\CodeLists;

class CodeList80ProductPackagingType extends CodeList
{
    public const KEY = 'ProductPackagingType';

    protected const MAPPING = [
        // No packaging, or all smaller items enclosed inside largest item
        "00" => "No outer packaging",
        // Thin card or soft plastic sleeve, much less rigid than a slip case
        "01" => "Slip-sleeve",
        /* Packaging consisting of formed plastic sealed around each side of the product. Not to be confused with single-sided Blister
					pack */
        "02" => "Clamshell",
        // Typical DVD-style packaging, sometimes known as an ‘Amaray’ case
        "03" => "Keep case",
        // Typical CD-style packaging
        "05" => "Jewel case",
        // Common CD-style packaging, a card folder with one or more panels incorporating a tray, hub or pocket to hold the disc(s)
        "06" => "Digipak",
        // Individual item, items or set in card box with separate or hinged lid: not to be confused with the commonly-used ‘boxed set’
        "09" => "In box",
        // Slip-case for single item only: German ‘Schuber’
        "10" => "Slip-cased",
        // Slip-case for multi-volume set: German ‘Kassette’; also commonly referred to as ‘boxed set’
        "11" => "Slip-cased set",
        // Rolled in tube or cylinder: eg sheet map or poster
        "12" => "Tube",
        // Use for miscellaneous items such as slides, microfiche, when presented in a binder
        "13" => "Binder",
        // Use for miscellaneous items such as slides, microfiche, when presented in a wallet or folder
        "14" => "In wallet or folder",
        // Long package with triangular cross-section used for rolled sheet maps, posters etc
        "15" => "Long triangular package",
        // Long package with square cross-section used for rolled sheet maps, posters, etc
        "16" => "Long square package",
        // 
        "17" => "Softbox (for DVD)",
        // In pouch, eg teaching materials in a plastic bag or pouch
        "18" => "Pouch",
        // In duroplastic or other rigid plastic case, eg for a class set
        "19" => "Rigid plastic case",
        // In cardboard case, eg for a class set
        "20" => "Cardboard case",
        /* Use for products or product bundles supplied for retail sale in shrink-wrapped packaging. For shrink-wrapped packs of multiple
					products for trade supply only, see code XL in List 7 */
        "21" => "Shrink-wrapped",
        // A pack comprising a pre-formed plastic blister and a printed card with a heat-seal coating
        "22" => "Blister pack",
        // A case with carrying handle, typically for a set of educational books and/or learning materials
        "23" => "Carry case",
        // Individual item, items or set in metal box or can with separate or hinged lid
        "24" => "In tin",
    ];
}