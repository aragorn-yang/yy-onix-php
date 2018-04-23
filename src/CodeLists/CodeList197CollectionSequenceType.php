<?php

namespace AragornYang\Onix\CodeLists;

class CodeList197CollectionSequenceType extends CodeList
{
    public const KEY = 'CollectionSequenceType';

    protected const MAPPING = [
        // A short explanatory label for the sequence should be provided in <CollectionSequenceTypeName>
        "01" => "Proprietary",
        // Order as specified by the title, eg by volume or part number sequence, provided for confirmation
        "02" => "Title order",
        // Order of publication of products within the collection
        "03" => "Publication order",
        /* Order defined by a continuing narrative or temporal sequence within products in the collection. Applicable to either fiction
					or to non-fiction (eg within a collection of history textbooks) */
        "04" => "Temporal/narrative order",
        // Original publication order, for a republished collection or collected works originally published outside a collection
        "05" => "Original publication order",
    ];
}