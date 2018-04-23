<?php

namespace AragornYang\Onix\CodeLists;

class CodeList57UnpricedItemType extends CodeList
{
    public const KEY = 'UnpricedItemType';

    protected const MAPPING = [
        // 
        "01" => "Free of charge",
        // 
        "02" => "Price to be announced",
        // Not sold separately at retail
        "03" => "Not sold separately",
        /* May be used for books that do not carry a recommended retail price; when goods can only be ordered ‘in person’ from a sales
					representative; when an ONIX file is ‘broadcast’ rather than sent one-to-one to a single trading partner; or for digital products
					offered on subscription or with pricing which is too complex to specify in ONIX */
        "04" => "Contact supplier",
        // When a collection that is not sold as a set nevertheless has its own ONIX record
        "05" => "Not sold as set",
        // Unpriced, but available via a pre-determined revenue share agreement
        "06" => "Revenue share",
    ];
}