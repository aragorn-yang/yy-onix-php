<?php

namespace AragornYang\Onix\CodeLists;

class CodeList147UnitOfUsage extends CodeList
{
    public const KEY = 'UnitOfUsage';

    protected const MAPPING = [
        // Maximum number of copies that may be made of a permitted extract
        "01" => "Copies",
        // Maximum number of characters in a permitted extract for a specified usage
        "02" => "Characters",
        // Maximum number of words in a permitted extract for a specified usage
        "03" => "Words",
        // Maximum number of pages in a permitted extract for a specified usage
        "04" => "Pages",
        // Maximum percentage of total content in a permitted extract for a specified usage
        "05" => "Percentage",
        // Maximum number of devices in ‘share group’
        "06" => "Devices",
        /* Maximum number of concurrent users. NB where the number of concurrent users is specifically not limited, set the number of
					concurrent users to zero */
        "07" => "Concurrent users",
        /* Maximum percentage of total content which may be used in a specified usage per time period; the time period being specified
					as another EpubUsageQuantity */
        "08" => "Percentage per time period",
        // Maximum time period in days <span style="color: blue">(beginning from product purchase or activation)</span>
        "09" => "Days",
        // Maximum time period in weeks
        "13" => "Weeks",
        // Maximum time period in months
        "14" => "Months",
        // Maximum number of times a specified usage event may occur (in the lifetime of the product)
        "10" => "Times",
        // Maximum frequency a specified usage event may occur (per month)
        "23" => "Times per month",
        // Maximum frequency a specified usage event may occur (per year)
        "24" => "Times per year",
        // Maximum resolution of printed or copy/pasted extracts
        "21" => "Dots per inch",
        /* Page number where allowed usage begins. <Quantity> should contain an absolute page number, counting the cover as page 1. (This
					type of page numbering should not be used where the e-publication has no fixed pagination). Use with (max number of) Pages,
					Percentage of content, or End page to specify pages allowed in Preview */
        "11" => "Allowed usage start page",
        /* Page number at which allowed usage ends. <Quantity> should contain an absolute page number, counting the cover as page 1.
					(This type of page numbering should not be used where the e-publication has no fixed pagination). Use with Start page to specify
					pages allowed in a preview */
        "12" => "Allowed usage end page",
    ];
}