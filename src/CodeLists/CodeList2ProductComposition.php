<?php

namespace AragornYang\Onix\CodeLists;

class CodeList2ProductComposition extends CodeList
{
    public const KEY = 'ProductComposition';

    protected const MAPPING = [
        // 
        "00" => "Single-item retail product",
        // Multiple-item product retailed as a whole
        "10" => "Multiple-item retail product",
        // Used when an ONIX record is required for a collection-as-a-whole, even though it is not currently retailed as such
        "11" => "Multiple-item collection, retailed as separate parts",
        // Product not for retail, and not carrying retail items, eg empty dumpbin, empty counterpack, promotional material
        "20" => "Trade-only product",
        // Carrying multiple copies for retailing as separate items, eg shrink-wrapped trade pack, filled dumpbin, filled counterpack
        "30" => "Multiple-item trade pack",
        /* Carrying multiple copies, primarily for retailing as separate items. The pack may be split and retailed as separate items
					OR retailed as a single item. Use instead of Multiple item trade pack (code 30) only if the data provider specifically wishes
					to make explicit that the pack may optionally be retailed as a whole */
        "31" => "Multiple-item pack",
    ];
}