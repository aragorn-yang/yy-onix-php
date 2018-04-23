<?php

namespace AragornYang\Onix\CodeLists;

class CodeList3RecordSourceType extends CodeList
{
    public const KEY = 'RecordSourceType';

    protected const MAPPING = [
        // 
        "00" => "Unspecified",
        // 
        "01" => "Publisher",
        /* Use to designate a distributor providing warehousing and fulfillment for a publisher or for a publisher’s sales agent, as
					distinct from a wholesaler */
        "02" => "Publisher’s distributor",
        // 
        "03" => "Wholesaler",
        // Bibliographic data aggregator
        "04" => "Bibliographic agency",
        // Bookseller selling to libraries (including academic libraries)
        "05" => "Library bookseller",
        /* Use for a publisher’s sales agent responsible for marketing the publisher’s products within a territory, as opposed to a publisher’s
					distributor who fulfills orders but does not market */
        "06" => "Publisher’s sales agent",
        /* Downstream provider of e-publication format conversion service (who might also be a distributor or retailer of the converted
					e-publication), supplying metadata on behalf of the publisher. The assigned ISBN is taken from the publisher’s ISBN prefix */
        "07" => "Publisher’s conversion service provider",
        /* Downstream provider of e-publication format conversion service (who might also be a distributor or retailer of the converted
					e-publication), supplying metadata on behalf of the publisher. The assigned ISBN is taken from the service provider’s prefix
					(whether or not the service provider dedicates that prefix to a particular publisher) */
        "08" => "Conversion service provider",
        // 
        "09" => "ISBN Registration Agency",
        // 
        "10" => "ISTC Registration Agency",
        // Bookseller selling primarily to consumers
        "11" => "Retail bookseller",
        // Bookseller selling primarily to educational institutions
        "12" => "Education bookseller",
    ];
}