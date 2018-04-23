<?php

namespace AragornYang\Onix\CodeLists;

class CodeList163PublishingDateRole extends CodeList
{
    public const KEY = 'PublishingDateRole';

    protected const MAPPING = [
        // Nominal date of publication
        "01" => "Publication date",
        /* If there is an embargo on retail sales in this market before a certain date, the date from which the embargo is lifted and
					retail sales are permitted */
        "02" => "Embargo date",
        // Date when a new product may be announced to the general public
        "09" => "Public announcement date",
        // Date when a new product may be announced for trade only
        "10" => "Trade announcement date",
        // Date when the work incorporated in a product was first published
        "11" => "Date of first publication",
        // Date when a product was last reprinted
        "12" => "Last reprint date",
        // Date when a product was (or will be) declared out-of-print or deleted
        "13" => "Out-of-print / deletion date",
        // Date when a product was last reissued
        "16" => "Last reissue date",
        // Date of publication of a printed book which is the print counterpart to a digital edition
        "19" => "Publication date of print counterpart",
        /* Year when the original language version of work incorporated in a product was first published (note, use only when different
					from code 11) */
        "20" => "Date of first publication in original language",
        // Date when a product will be reissued
        "21" => "Forthcoming reissue date",
        /* Date when a product that has been temporary withdrawn from sale or recalled for any reason is expected to become available
					again, eg after correction of quality or technical issues */
        "22" => "Expected availability date after temporary withdrawal",
        /* Date from which reviews of a product may be published eg in newspapers and magazines or online. Provided to the book trade
					for information only: newspapers and magazines are not expected to be recipients of ONIX metadata */
        "23" => "Review embargo date",
        /* Latest date on which an order may be placed with the publisher for guaranteed delivery prior to the publication date. May
					or may not be linked to a special reservation or pre-publication price */
        "25" => "Publisher’s reservation order deadline",
        // Date when a product will be reprinted
        "26" => "Forthcoming reprint date",
        /* Earliest date a retail ‘preorder’ can be placed (where this is distinct from the public announcement date). In the absence
					of a preorder embargo, advance orders can be placed as soon as metadata is available to the consumer (this would be the public
					announcement date, or in the absence of a public announcement date, the earliest date metadata is available to the retailer) */
        "27" => "Preorder embargo date",
        // Date of acquisition of product by new publisher (use with publishing roles 09 and 13)
        "28" => "Transfer date",
        // For an audiovisual work (eg on DVD)
        "29" => "Date of production",
    ];
}