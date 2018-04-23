<?php

namespace AragornYang\Onix\CodeLists;

class CodeList71SalesRestrictionType extends CodeList
{
    public const KEY = 'SalesRestrictionType';

    protected const MAPPING = [
        // Restriction must be described in <SalesRestrictionDetail> (ONIX 2.1) or <SalesRestrictionNote> (ONIX 3.0)
        "00" => "Unspecified – see text",
        /* For sale only through designated retailer. Retailer must be identified or named in an instance of the <SalesOutlet> composite.
					Use only when it is not possible to assign the more explicit code 04 or 05 */
        "01" => "Retailer exclusive / own brand",
        /* For editions sold only though office supplies wholesalers. Retailer(s) and/or distributor(s) may be identified or named in
					an instance of the <SalesOutlet> composite */
        "02" => "Office supplies edition",
        // For an ISBN that is assigned for a publisher’s internal purposes
        "03" => "Internal publisher use only: do not list",
        /* For sale only through designated retailer, though not under retailer’s own brand/imprint. Retailer must be identified or named
					in an instance of the <SalesOutlet> composite */
        "04" => "Retailer exclusive",
        /* For sale only through designated retailer under retailer’s own brand/imprint. Retailer must be identified or named in an instance
					of the <SalesOutlet> composite */
        "05" => "Retailer own brand",
        // For sale to libraries only; not for sale through retail trade
        "06" => "Library edition",
        // For sale directly to schools only; not for sale through retail trade
        "07" => "Schools only edition",
        // Indexed for the German market – in Deutschland indiziert
        "08" => "Indiziert",
        /* Expected to apply in particular to digital products for consumer sale where the publisher does not permit the product to be
					supplied to libraries who provide an ebook loan service */
        "09" => "Not for sale to libraries",
        // For editions sold only through newsstands/newsagents
        "10" => "News outlet edition",
        // Not for sale through designated retailer. Retailer must be identified or named in an instance of the <SalesOutlet> composite
        "11" => "Retailer exception",
        // Not for sale to organisations or services offering consumers subscription access to a library of books
        "12" => "Not for sale to subscription services",
        // Restricted to organisations or services offering consumers subscription access to a library of books
        "13" => "Subscription services only",
    ];
}