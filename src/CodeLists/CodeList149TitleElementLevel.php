<?php

namespace AragornYang\Onix\CodeLists;

class CodeList149TitleElementLevel extends CodeList
{
    public const KEY = 'TitleElementLevel';

    protected const MAPPING = [
        // The title element refers to an individual product
        "01" => "Product",
        // The title element refers to the top level of a bibliographic collection
        "02" => "Collection level",
        // The title element refers to an intermediate level of a bibliographic collection that comprises two or more ‘sub-collections’
        "03" => "Subcollection",
        /* The title element refers to a content item within a product, eg a work included in a combined or ‘omnibus’ edition, or a chapter
					in a book */
        "04" => "Content item",
        /* The title element names a master brand where the use of the brand spans multiple collections and product forms, and possibly
					multiple imprints and publishers. Used only for branded media properties carrying, for example, a children’s character brand */
        "05" => "Master brand",
        /* The title element refers to an intermediate level of a bibliographic collection that is a subdivision of a sub-collection
					(a third level of collective identity) */
        "06" => "Sub-subcollection",
    ];
}