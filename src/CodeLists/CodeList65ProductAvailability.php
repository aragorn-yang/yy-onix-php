<?php

namespace AragornYang\Onix\CodeLists;

class CodeList65ProductAvailability extends CodeList
{
    public const KEY = 'ProductAvailability';

    protected const MAPPING = [
        // Cancelled: product was announced, and subsequently abandoned
        "01" => "Cancelled",
        /* Not yet available (requires expected date, either as <ExpectedShipDate> (ONIX 2.1) or as <SupplyDate> with <SupplyDateRole>
					coded ‘08’ (ONIX 3.0), except in exceptional circumstances where no date is known) */
        "10" => "Not yet available",
        /* Not yet available, but will be a stock item when available (requires expected date, either as <ExpectedShipDate> (ONIX 2.1)
					or as <SupplyDate> with <SupplyDateRole> coded ‘08’ (ONIX 3.0), except in exceptional circumstances where no date is known).
					Used particularly for imports which have been published in the country of origin but have not yet arrived in the importing
					country */
        "11" => "Awaiting stock",
        /* Not yet available, to be published as print-on-demand only (requires expected date, either as <ExpectedShipDate> (ONIX 2.1)
					or as <SupplyDate> with <SupplyDateRole> coded ‘08’ (ONIX 3.0), except in exceptional circumstances where no date is known).
					May apply either to a POD successor to an existing conventional edition, when the successor will be published under a different
					ISBN (normally because different trade terms apply); or to a title that is being published as a POD original */
        "12" => "Not yet available, will be POD",
        // Available from us (form of availability unspecified)
        "20" => "Available",
        // Available from us as a stock item
        "21" => "In stock",
        // Available from us as a non-stock item, by special order
        "22" => "To order",
        // Available from us by print-on-demand
        "23" => "POD",
        /* Temporarily unavailable: temporarily unavailable from us (reason unspecified) (requires expected date, either as <ExpectedShipDate>
					(ONIX 2.1) or as <SupplyDate> with <SupplyDateRole> coded ‘08’ (ONIX 3.0), except in exceptional circumstances where no date
					is known) */
        "30" => "Temporarily unavailable",
        /* Stock item, temporarily out of stock (requires expected date, either as <ExpectedShipDate> (ONIX 2.1) or as <SupplyDate> with
					<SupplyDateRole> coded ‘08’ (ONIX 3.0), except in exceptional circumstances where no date is known) */
        "31" => "Out of stock",
        /* Temporarily unavailable, reprinting (requires expected date, either as <ExpectedShipDate> (ONIX 2.1) or as <SupplyDate> with
					<SupplyDateRole> coded ‘08’ (ONIX 3.0), except in exceptional circumstances where no date is known) */
        "32" => "Reprinting",
        /* Temporarily unavailable, awaiting reissue (requires expected date, either as <ExpectedShipDate> (ONIX 2.1) or as <SupplyDate>
					with <SupplyDateRole> coded ‘08’ (ONIX 3.0), except in exceptional circumstances where no date is known) */
        "33" => "Awaiting reissue",
        /* May be for quality or technical reasons. Requires expected availability date, either as <ExpectedShipDate> (ONIX 2.1) or as
					<SupplyDate> with <SupplyDateRole> coded ‘08’ (ONIX 3.0), except in exceptional circumstances where no date is known */
        "34" => "Temporarily withdrawn from sale",
        // Not available from us (for any reason)
        "40" => "Not available (reason unspecified)",
        // This product is unavailable, but a successor product or edition is or will be available from us (identify successor in <RelatedProduct>)
        "41" => "Not available, replaced by new product",
        /* This product is unavailable, but the same content is or will be available from us in an alternative format (identify other
					format product in <RelatedProduct>) */
        "42" => "Not available, other format available",
        // Identify new supplier in <NewSupplier> if possible
        "43" => "No longer supplied by us",
        // Not available to trade, apply direct to publisher
        "44" => "Apply direct",
        // Must be bought as part of a set <span style="color: blue">or trade pack</span> (identify set <span style="color: blue">or pack</span> in <RelatedProduct>)
        "45" => "Not sold separately",
        // May be for legal reasons or to avoid giving offence
        "46" => "Withdrawn from sale",
        // Remaindered
        "47" => "Remaindered",
        /* Out of print, but a print-on-demand edition is or will be available under a different ISBN. Use only when the POD successor
					has a different ISBN, normally because different trade terms apply */
        "48" => "Not available, replaced by POD",
        // Recalled for reasons of consumer safety
        "49" => "Recalled",
        // When a collection that is not sold as a set nevertheless has its own ONIX record
        "50" => "Not sold as set",
        /* This product is unavailable, no successor product or alternative format is available or planned. Use this code only when the
					publisher has indicated the product is out of print */
        "51" => "Not available, publisher indicates OP",
        /* This product is unavailable in this market, no successor product or alternative format is available or planned. Use this code
					when a publisher has indicated the product is permanently unavailable (in this market) while remaining available elsewhere */
        "52" => "Not available, publisher no longer sells product in this market",
        /* Sender has not received any recent update for this product from the publisher/supplier (for use when the sender is a data
					aggregator): the definition of ‘recent’ must be specified by the aggregator, or by agreement between parties to an exchange */
        "97" => "No recent update received",
        // Sender is no longer receiving any updates from the publisher/supplier of this product (for use when the sender is a data aggregator)
        "98" => "No longer receiving updates",
        // Availability not known to sender
        "99" => "Contact supplier",
    ];
}