<?php

namespace AragornYang\Onix\CodeLists;

class CodeList6BarcodeIndicator extends CodeList
{
    public const KEY = 'BarcodeIndicator';

    protected const MAPPING = [
        // 
        "00" => "Not barcoded",
        // 
        "01" => "Barcoded, scheme unspecified",
        // Position unspecified
        "02" => "EAN13",
        // Position unspecified
        "03" => "EAN13+5 (US dollar price encoded)",
        // Type and position unspecified. DEPRECATED: if possible, use more specific values below
        "04" => "UPC12",
        // Type and position unspecified. DEPRECATED: if possible, use more specific values below
        "05" => "UPC12+5",
        // AKA item/price: position unspecified
        "06" => "UPC12 (item-specific)",
        // AKA item/price: position unspecified
        "07" => "UPC12+5 (item-specific)",
        // AKA price/item: position unspecified
        "08" => "UPC12 (price-point)",
        // AKA price/item: position unspecified
        "09" => "UPC12+5 (price-point)",
        // ‘Cover 4’ is defined as the back cover of a book
        "10" => "EAN13 on cover 4",
        // ‘Cover 4’ is defined as the back cover of a book
        "11" => "EAN13+5 on cover 4 (US dollar price encoded)",
        // AKA item/price; ‘cover 4’ is defined as the back cover of a book
        "12" => "UPC12 (item-specific) on cover 4",
        // AKA item/price; ‘cover 4’ is defined as the back cover of a book
        "13" => "UPC12+5 (item-specific) on cover 4",
        // AKA price/item; ‘cover 4’ is defined as the back cover of a book
        "14" => "UPC12 (price-point) on cover 4",
        // AKA price/item; ‘cover 4’ is defined as the back cover of a book
        "15" => "UPC12+5 (price-point) on cover 4",
        // ‘Cover 3’ is defined as the inside back cover of a book
        "16" => "EAN13 on cover 3",
        // ‘Cover 3’ is defined as the inside back cover of a book
        "17" => "EAN13+5 on cover 3 (US dollar price encoded)",
        // AKA item/price; ‘cover 3’ is defined as the inside back cover of a book
        "18" => "UPC12 (item-specific) on cover 3",
        // AKA item/price; ‘cover 3’ is defined as the inside back cover of a book
        "19" => "UPC12+5 (item-specific) on cover 3",
        // AKA price/item; ‘cover 3’ is defined as the inside back cover of a book
        "20" => "UPC12 (price-point) on cover 3",
        // AKA price/item; ‘cover 3’ is defined as the inside back cover of a book
        "21" => "UPC12+5 (price-point) on cover 3",
        // ‘Cover 2’ is defined as the inside front cover of a book
        "22" => "EAN13 on cover 2",
        // ‘Cover 2’ is defined as the inside front cover of a book
        "23" => "EAN13+5 on cover 2 (US dollar price encoded)",
        // AKA item/price; ‘cover 2’ is defined as the inside front cover of a book
        "24" => "UPC12 (item-specific) on cover 2",
        // AKA item/price; ‘cover 2’ is defined as the inside front cover of a book
        "25" => "UPC12+5 (item-specific) on cover 2",
        // AKA price/item; ‘cover 2’ is defined as the inside front cover of a book
        "26" => "UPC12 (price-point) on cover 2",
        // AKA price/item; ‘cover 2’ is defined as the inside front cover of a book
        "27" => "UPC12+5 (price-point) on cover 2",
        // To be used only on boxed products
        "28" => "EAN13 on box",
        // To be used only on boxed products
        "29" => "EAN13+5 on box (US dollar price encoded)",
        // AKA item/price; to be used only on boxed products
        "30" => "UPC12 (item-specific) on box",
        // AKA item/price; to be used only on boxed products
        "31" => "UPC12+5 (item-specific) on box",
        // AKA price/item; to be used only on boxed products
        "32" => "UPC12 (price-point) on box",
        // AKA price/item; to be used only on boxed products
        "33" => "UPC12+5 (price-point) on box",
        // To be used only on products fitted with hanging tags
        "34" => "EAN13 on tag",
        // To be used only on products fitted with hanging tags
        "35" => "EAN13+5 on tag (US dollar price encoded)",
        // AKA item/price; to be used only on products fitted with hanging tags
        "36" => "UPC12 (item-specific) on tag",
        // AKA item/price; to be used only on products fitted with hanging tags
        "37" => "UPC12+5 (item-specific) on tag",
        // AKA price/item; to be used only on products fitted with hanging tags
        "38" => "UPC12 (price-point) on tag",
        // AKA price/item; to be used only on products fitted with hanging tags
        "39" => "UPC12+5 (price-point) on tag",
        // Not be used on books unless they are contained within outer packaging
        "40" => "EAN13 on bottom",
        // Not be used on books unless they are contained within outer packaging
        "41" => "EAN13+5 on bottom (US dollar price encoded)",
        // AKA item/price; not be used on books unless they are contained within outer packaging
        "42" => "UPC12 (item-specific) on bottom",
        // AKA item/price; not be used on books unless they are contained within outer packaging
        "43" => "UPC12+5 (item-specific) on bottom",
        // AKA price/item; not be used on books unless they are contained within outer packaging
        "44" => "UPC12 (price-point) on bottom",
        // AKA price/item; not be used on books unless they are contained within outer packaging
        "45" => "UPC12+5 (price-point) on bottom",
        // Not be used on books unless they are contained within outer packaging
        "46" => "EAN13 on back",
        // Not be used on books unless they are contained within outer packaging
        "47" => "EAN13+5 on back (US dollar price encoded)",
        // AKA item/price; not be used on books unless they are contained within outer packaging
        "48" => "UPC12 (item-specific) on back",
        // AKA item/price; not be used on books unless they are contained within outer packaging
        "49" => "UPC12+5 (item-specific) on back",
        // AKA price/item; not be used on books unless they are contained within outer packaging
        "50" => "UPC12 (price-point) on back",
        // AKA price/item; not be used on books unless they are contained within outer packaging
        "51" => "UPC12+5 (price-point) on back",
        // To be used only on products packaged in outer sleeves
        "52" => "EAN13 on outer sleeve/back",
        // To be used only on products packaged in outer sleeves
        "53" => "EAN13+5 on outer sleeve/back (US dollar price encoded)",
        // AKA item/price; to be used only on products packaged in outer sleeves
        "54" => "UPC12 (item-specific) on outer sleeve/back",
        // AKA item/price; to be used only on products packaged in outer sleeves
        "55" => "UPC12+5 (item-specific) on outer sleeve/back",
        // AKA price/item; to be used only on products packaged in outer sleeves
        "56" => "UPC12 (price-point) on outer sleeve/back",
        // AKA price/item; to be used only on products packaged in outer sleeves
        "57" => "UPC12+5 (price-point) on outer sleeve/back",
        // Position unspecified
        "58" => "EAN13+5 (no price encoded)",
        // ‘Cover 4’ is defined as the back cover of a book
        "59" => "EAN13+5 on cover 4 (no price encoded)",
        // ‘Cover 3’ is defined as the inside back cover of a book
        "60" => "EAN13+5 on cover 3 (no price encoded)",
        // ‘Cover 2’ is defined as the inside front cover of a book
        "61" => "EAN13+5 on cover 2 (no price encoded)",
        // To be used only on boxed products
        "62" => "EAN13+5 on box (no price encoded)",
        // To be used only on products fitted with hanging tags
        "63" => "EAN13+5 on tag (no price encoded)",
        // Not be used on books unless they are contained within outer packaging
        "64" => "EAN13+5 on bottom (no price encoded)",
        // Not be used on books unless they are contained within outer packaging
        "65" => "EAN13+5 on back (no price encoded)",
        // To be used only on products packaged in outer sleeves
        "66" => "EAN13+5 on outer sleeve/back (no price encoded)",
        // Position unspecified
        "67" => "EAN13+5 (CAN dollar price encoded)",
        // ‘Cover 4’ is defined as the back cover of a book
        "68" => "EAN13+5 on cover 4 (CAN dollar price encoded)",
        // ‘Cover 3’ is defined as the inside back cover of a book
        "69" => "EAN13+5 on cover 3 (CAN dollar price encoded)",
        // ‘Cover 2’ is defined as the inside front cover of a book
        "70" => "EAN13+5 on cover 2 (CAN dollar price encoded)",
        // To be used only on boxed products
        "71" => "EAN13+5 on box (CAN dollar price encoded)",
        // To be used only on products fitted with hanging tags
        "72" => "EAN13+5 on tag (CAN dollar price encoded)",
        // Not be used on books unless they are contained within outer packaging
        "73" => "EAN13+5 on bottom (CAN dollar price encoded)",
        // Not be used on books unless they are contained within outer packaging
        "74" => "EAN13+5 on back (CAN dollar price encoded)",
        // To be used only on products packaged in outer sleeves
        "75" => "EAN13+5 on outer sleeve/back (CAN dollar price encoded)",
    ];
}