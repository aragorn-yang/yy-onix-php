<?php

namespace AragornYang\Onix\CodeLists;

class CodeList222MessageStatusDateRole extends CodeList
{
    public const KEY = 'MessageStatusDateRole';

    protected const MAPPING = [
        // Expected or actual date of processing and ingestion of data to recipient’s system
        "01" => "Ingest date",
        /* Expected or actual date for data to be available from the recipient’s system to downstream supply chain partners (or where
					the recipient is a retailer, to consumers) */
        "02" => "Export date",
    ];
}