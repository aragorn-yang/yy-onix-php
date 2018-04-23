<?php

namespace AragornYang\Onix\CodeLists;

class CodeList143USCPSIAHazardWarning extends CodeList
{
    public const KEY = 'USCPSIAHazardWarning';

    protected const MAPPING = [
        // Required on applicable products sold in the US
        "01" => "WARNING: CHOKING HAZARD – Small parts | Not for children under 3 yrs.",
        // Required on applicable products sold in the US
        "03" => "WARNING: CHOKING HAZARD – This toy is a small ball | Not for children under 3 yrs.",
        // Required on applicable products sold in the US
        "04" => "WARNING: CHOKING HAZARD – Toy contains a small ball | Not for children under 3 yrs.",
        // Required on applicable products sold in the US
        "05" => "WARNING: CHOKING HAZARD – This toy is a marble | Not for children under 3 yrs.",
        // Required on applicable products sold in the US
        "06" => "WARNING: CHOKING HAZARD – Toy contains a marble | Not for children under 3 yrs.",
        // To be used when a supplier wishes to make a clear statement that no such warning is applicable to product
        "07" => "No choking hazard warning necessary",
        /* Required on applicable products sold in the US. Should be accompanied by additional text: Swallowed magnets can stick together
					across intestines causing serious infections and death. Seek immediate medical attention if magnet(s) are swallowed or inhaled */
        "11" => "WARNING: MAGNET HAZARD – Product contains (a) small magnet(s)",
    ];
}