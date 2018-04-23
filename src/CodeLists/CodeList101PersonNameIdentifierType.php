<?php

namespace AragornYang\Onix\CodeLists;

class CodeList101PersonNameIdentifierType extends CodeList
{
    public const KEY = 'PersonNameIdentifierType';

    protected const MAPPING = [
        // Note that <IDTypeName> is required with proprietary identifiers
        "01" => "Proprietary",
        /* Personennamendatei – person name authority file used by Deutsche Nationalbibliothek and in other German-speaking countries.
					See http://www.d-nb.de/standardisierung/normdateien/pnd.htm (German) or http://www.d-nb.de/eng/standardisierung/normdateien/pnd.htm
					(English). DEPRECATED in favour of the GND */
        "02" => "PND",
        // Library of Congress control number assigned to a Library of Congress Name Authority record
        "04" => "LCCN",
        // International Standard Name Identifier. See http://www.isni.org/
        "16" => "ISNI",
        /* Gemeinsame Normdatei – Joint Authority File in the German-speaking countries. See http://www.dnb.de/EN/gnd (English). Combines
					the PND, SWD and GKD into a single authority file, and should be used in preference */
        "25" => "GND",
    ];
}