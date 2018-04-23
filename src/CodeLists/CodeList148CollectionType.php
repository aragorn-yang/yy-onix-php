<?php

namespace AragornYang\Onix\CodeLists;

class CodeList148CollectionType extends CodeList
{
    public const KEY = 'CollectionType';

    protected const MAPPING = [
        // Collection type is not determined
        "00" => "Unspecified (default)",
        /* The collection is a bibliographic collection (eg a series or set (Fr. série)) defined and identified by a publisher, either
					on the product itself or in product information supplied by the publisher. The books in the collection generally share a subject,
					narrative, design style or authorship. They may may have a specific order, or the collection may be unordered */
        "10" => "Publisher collection",
        /* The collection is a bibliographic collection defined and identified by a publisher, either on the product itself or in product
					information supplied by the publisher, where the books in the collection have no specific order, shared subject, narrative,
					style or shared authorship, and are grouped by the publisher largely for marketing purposes. The collection has many of the
					characteristics of an imprint or marque. Used primarily in French book publishing, to distinguish between ‘série’ (using the
					normal code 10) and ‘collection’ (code 11), and where the collection éditoriale is not an imprint */
        "11" => "Collection éditoriale",
        /* The collection has been defined and identified by a party in the metadata supply chain other than the publisher, typically
					an aggregator. */
        "20" => "Ascribed collection",
    ];
}