<?php

namespace AragornYang\Onix\CodeLists;

class CodeList166SupplyDateRole extends CodeList
{
    public const KEY = 'SupplyDateRole';

    protected const MAPPING = [
        /* If there is an embargo on retail sales before a certain date, the date from which the embargo is lifted and retail sales are
					permitted */
        "02" => "Embargo date",
        /* The date on which physical stock is expected to be available to be shipped to retailers, or a digital product is expected
					to be released by the publisher or digital asset distributor to retailers or their retail platform providers */
        "08" => "Expected availability date",
        // Last date when returns will be accepted, generally for a product which is being remaindered or put out of print
        "18" => "Last date for returns",
        /* Latest date on which an order may be placed for guaranteed delivery prior to the publication date. May or may not be linked
					to a special reservation or pre-publication price */
        "25" => "Reservation order deadline",
        /* First date on which the supplier specified in <NewSupplier> will accept orders. Note the first date would typically be the
					day after the old supplier end date, but they may overlap if there is an agreement to forward any orders between old and new
					supplier for fulfillment */
        "50" => "New supplier start date",
        /* Last date on which the supplier specified in <Supplier> will accept orders. New supplier should be specified where available.
					Note last date would typically be the day before the new supplier start date, but they may overlap if there is an agreement
					to forward any orders between old and new supplier for fulfillment */
        "51" => "Supplier end date",
    ];
}