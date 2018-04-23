<?php

namespace AragornYang\Onix\CodeLists;

class CodeList217PriceIdentifierType extends CodeList
{
    public const KEY = 'PriceIdentifierType';

    protected const MAPPING = [
        // Note that <IDTypeName> is required for proprietary identifiers
        "01" => "Proprietary",
        /* Proprietary identifier uniquely identifies price amount and currency. Two unrelated products with the same price amount carry
					the same identifier, though their price types may be different */
        "02" => "Proprietary price point identifier",
        /* Proprietary identifier uniquely identifies price type, qualifier and any constraints and conditions. Two unrelated products
					with the same price type carry the same identifier, though their price points may be different */
        "03" => "Proprietary price type identifier",
        /* Proprietary identifier identifies a unique combination of price point and type, though two unrelated products may carry the
					same identifier if all details of their prices are identical */
        "04" => "Proprietary price point and type identifier",
        /* Proprietary identifier is unique to a single price point, price type and product. No two products can carry the same identifier,
					even if all details of their prices are identical */
        "05" => "Proprietary unique price identifier",
        /* Proprietary identifier uniquely identifies a specific combination of product, price amount and currency, independent of the
					price type */
        "06" => "Proprietary product price point identifier",
        /* Proprietary identifier uniquely identifies a specific combination of product, price type, qualifier and any constraints and
					conditions, independent of the price amount and currency. A product with the same product price type identififer may carry
					differing price amounts, currencies at different points in time */
        "07" => "Proprietary product price type identifier",
    ];
}