<?php

namespace AragornYang\Onix\CodeLists;

class CodeList54AvailabilityStatus extends CodeList
{
    public const KEY = 'AvailabilityStatus';

    protected const MAPPING = [
        // Publication abandoned after having been announced
        "AB" => "Cancelled",
        // Apply direct to publisher, item not available to trade
        "AD" => "Available direct from publisher only",
        // Check with customer service
        "CS" => "Availability uncertain",
        // Wholesaler or vendor only
        "EX" => "No longer stocked by us",
        // In-print and in stock
        "IP" => "Available",
        // May be accompanied by an estimated average time to supply
        "MD" => "Manufactured on demand",
        // MUST be accompanied by an expected availability date
        "NP" => "Not yet published",
        // Wholesaler or vendor only: MUST be accompanied by expected availability date
        "NY" => "Newly catalogued, not yet in stock",
        // This format is out of print, but another format is available: should be accompanied by an identifier for the alternative product
        "OF" => "Other format available",
        // No current plan to reprint
        "OI" => "Out of stock indefinitely",
        // Discontinued, deleted from catalogue
        "OP" => "Out of print",
        /* This edition is out of print, but a new edition has been or will soon be published: should be accompanied by an identifier
					for the new edition */
        "OR" => "Replaced by new edition",
        // Publication has been announced, and subsequently postponed with no new date
        "PP" => "Publication postponed indefinitely",
        /* Supply of this item has been transferred to another publisher or distributor: should be accompanied by an identifier for the
					new supplier */
        "RF" => "Refer to another supplier",
        // 
        "RM" => "Remaindered",
        // MUST be accompanied by an expected availability date
        "RP" => "Reprinting",
        // Use instead of RP as a last resort, only if it is really impossible to give an expected availability date
        "RU" => "Reprinting, undated",
        /* This item is not stocked but has to be specially ordered from a supplier (eg import item not stocked locally): may be accompanied
					by an estimated average time to supply */
        "TO" => "Special order",
        // Wholesaler or vendor only
        "TP" => "Temporarily out of stock because publisher cannot supply",
        // MUST be accompanied by an expected availability date
        "TU" => "Temporarily unavailable",
        /* The item is out of stock but will be reissued under the same ISBN: MUST be accompanied by an expected availability date and
					by the reissue date in the <Reissue> composite. See notes on the <Reissue> composite for details on treatment of availability
					status during reissue */
        "UR" => "Unavailable, awaiting reissue",
        // MUST be accompanied by the remainder date
        "WR" => "Will be remaindered as of (date)",
        // Typically, withdrawn indefinitely for legal reasons
        "WS" => "Withdrawn from sale",
    ];
}