<?php

namespace AragornYang\Onix\CodeLists;

class CodeList46SalesRightsType extends CodeList
{
    public const KEY = 'SalesRightsType';

    protected const MAPPING = [
        // May only be used with the ONIX 3 <ROWSalesRightsType> element
        "00" => "Sales rights unknown or unstated for any reason",
        // 
        "01" => "For sale with exclusive rights in the specified countries or territories",
        // 
        "02" => "For sale with non-exclusive rights in the specified countries or territories",
        // 
        "03" => "Not for sale in the specified countries or territories (reason unspecified)",
        // 
        "04" => "Not for sale in the specified countries (but publisher holds exclusive rights in those countries or territories)",
        // 
        "05" => "Not for sale in the specified countries (publisher holds non-exclusive rights in those countries or territories)",
        // 
        "06" => "Not for sale in the specified countries (because publisher does not hold rights in those countries or territories)",
        // Only for use with ONIX 3. Deprecated
        "07" => "For sale with exclusive rights in the specified countries or territories (sales restriction applies)",
        // Only for use with ONIX 3. Deprecated
        "08" => "For sale with non-exclusive rights in the specified countries or territories (sales restriction applies)",
    ];
}