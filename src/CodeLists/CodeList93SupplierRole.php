<?php

namespace AragornYang\Onix\CodeLists;

class CodeList93SupplierRole extends CodeList
{
    public const KEY = 'SupplierRole';

    protected const MAPPING = [
        // Default
        "00" => "Unspecified",
        // Publisher as supplier to retail trade outlets
        "01" => "Publisher to retailers",
        // 
        "02" => "Publisher’s exclusive distributor to retailers",
        // 
        "03" => "Publisher’s non-exclusive distributor to retailers",
        // Wholesaler supplying retail trade outlets
        "04" => "Wholesaler",
        // DEPRECATED – use <MarketRepresentation> (ONIX 2.1) or <MarketPublishingDetail> (ONIX 3.0) to specify a sales agent
        "05" => "Sales agent",
        /* In a specified supply territory. Use only where exclusive/non-exclusive status is not known. Prefer 02 or 03 as appropriate,
					where possible */
        "06" => "Publisher’s distributor to retailers",
        // Where a POD product is supplied to retailers and/or consumers direct from a POD source
        "07" => "POD supplier",
        // 
        "08" => "Retailer",
        // Publisher as supplier direct to consumers and/or institutional customers
        "09" => "Publisher to end-customers",
        // Intermediary as exclusive distributor direct to consumers and/or institutional customers
        "10" => "Exclusive distributor to end-customers",
        // Intermediary as non-exclusive distributor direct to consumers and/or institutional customers
        "11" => "Non-exclusive distributor to end-customers",
        // Use only where exclusive/non-exclusive status is not known. Prefer 10 or 11 as appropriate, where possible
        "12" => "Distributor to end-customers",
    ];
}