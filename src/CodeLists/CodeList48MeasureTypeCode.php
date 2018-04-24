<?php

namespace AragornYang\Onix\CodeLists;

class CodeList48MeasureTypeCode extends CodeList
{
    public const KEY = 'MeasureTypeCode';

    protected const MAPPING = [
        /* For a book, the overall spine height when standing on a shelf. For a folded map, the height when folded. In general, the height
					of a product in the form in which it is presented or packaged for retail sale */
        "01" => "Height",
        /* For a book, the overall horizontal dimension of the cover when standing upright. For a folded map, the width when folded.
					In general, the width of a product in the form in which it is presented or packaged for retail sale */
        "02" => "Width",
        /* For a book, the overall thickness of the spine. For a folded map, the thickness when folded. In general, the thickness or
					depth of a product in the form in which it is presented or packaged for retail sale */
        "03" => "Thickness",
        // Not recommended for general use
        "04" => "Page trim height",
        // Not recommended for general use
        "05" => "Page trim width",
        // 
        "08" => "Unit weight",
        // Of a globe, for example
        "09" => "Diameter (sphere)",
        // The height of a folded or rolled sheet map, poster etc when unfolded
        "10" => "Unfolded/unrolled sheet height",
        // The width of a folded or rolled sheet map, poster etc when unfolded
        "11" => "Unfolded/unrolled sheet width",
        /* The diameter of the cross-section of a tube or cylinder, usually carrying a rolled sheet product. Use 01 ‘Height’ for the
					height or length of the tube */
        "12" => "Diameter (tube or cylinder)",
        /* The length of a side of the cross-section of a long triangular or square package, usually carrying a rolled sheet product.
					Use 01 ‘Height’ for the height or length of the package */
        "13" => "Rolled sheet package side measure",
    ];
}