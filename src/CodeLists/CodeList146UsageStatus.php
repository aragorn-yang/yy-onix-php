<?php

namespace AragornYang\Onix\CodeLists;

class CodeList146UsageStatus extends CodeList
{
    public const KEY = 'UsageStatus';

    protected const MAPPING = [
        // 
        "01" => "Permitted unlimited",
        // Limit should be specified in <EpubUsageLimit>
        "02" => "Permitted subject to limit",
        // 
        "03" => "Prohibited",
    ];
}