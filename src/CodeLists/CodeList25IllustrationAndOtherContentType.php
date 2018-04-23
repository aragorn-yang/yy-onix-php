<?php

namespace AragornYang\Onix\CodeLists;

class CodeList25IllustrationAndOtherContentType extends CodeList
{
    public const KEY = 'IllustrationAndOtherContentType';

    protected const MAPPING = [
        // See description in the <IllustrationTypeDescription> element
        "00" => "Unspecified, see description",
        // 
        "01" => "Illustrations, black and white",
        // 
        "02" => "Illustrations, color",
        // Including black and white photographs
        "03" => "Halftones, black and white",
        // Including color photographs
        "04" => "Halftones, color",
        // 
        "05" => "Line drawings, black and white",
        // 
        "06" => "Line drawings, color",
        // 
        "07" => "Tables, black and white",
        // 
        "08" => "Tables, color",
        // 
        "09" => "Illustrations, unspecified",
        // Including photographs
        "10" => "Halftones, unspecified",
        // 
        "11" => "Tables, unspecified",
        // 
        "12" => "Line drawings, unspecified",
        // 
        "13" => "Halftones, duotone",
        // 
        "14" => "Maps",
        // 
        "15" => "Frontispiece",
        // 
        "16" => "Diagrams",
        // 
        "17" => "Figures",
        // 
        "18" => "Charts",
        // Recorded music extracts or examples, or complete recorded work(s), accompanying textual or other content
        "19" => "Recorded music items",
        // Printed music extracts or examples, or complete music score(s), accompanying textual or other content
        "20" => "Printed music items",
        /* To be used in the mathematical sense of a diagram that represents numerical values plotted against an origin and axes, cf
					codes 16 and 18 */
        "21" => "Graphs",
        // ‘Plates’ means illustrations that are on separate pages bound into the body of a book
        "22" => "Plates, unspecified",
        // ‘Plates’ means illustrations that are on separate pages bound into the body of a book
        "23" => "Plates, black and white",
        // ‘Plates’ means illustrations that are on separate pages bound into the body of a book
        "24" => "Plates, color",
        // 
        "25" => "Index",
        // 
        "26" => "Bibliography",
        // Larger-scale inset maps of places or features of interest included in a map product
        "27" => "Inset maps",
        // GPS grids included in a map product
        "28" => "GPS grids",
        // 
        "29" => "Glossary",
    ];
}