<?php

namespace AragornYang\Onix\CodeLists;

class CodeList1NotificationOrUpdateType extends CodeList
{
    public const KEY = 'NotificationOrUpdateType';

    protected const MAPPING = [
        // Use for a complete record issued earlier than approximately six months before publication
        "01" => "Early notification",
        /* Use for a complete record issued to confirm advance information approximately six months before publication; or for a complete
					record issued after that date and before information has been confirmed from the book-in-hand */
        "02" => "Advance notification (confirmed)",
        /* Use for a complete record issued to confirm advance information at or just before actual publication date; or for a complete
					record issued at any later date */
        "03" => "Notification confirmed on publication",
        /* In ONIX 3.0 only, use when sending a ‘block update’ record. In previous ONIX releases, ONIX updating has generally been by
					complete record replacement using code 03, and code 04 is not used */
        "04" => "Update (partial)",
        /* Use when sending an instruction to delete a record which was previously issued. Note that a Delete instruction should NOT
					be used when a product is cancelled, put out of print, or otherwise withdrawn from sale: this should be handled as a change
					of Publishing status, leaving the receiver to decide whether to retain or delete the record. A Delete instruction is only
					used when there is a particular reason to withdraw a record completely, eg because it was issued in error */
        "05" => "Delete",
        // Notice of sale of a product, from one publisher to another: sent by the publisher disposing of the product
        "08" => "Notice of sale",
        // Notice of acquisition of a product, by one publisher from another: sent by the acquiring publisher
        "09" => "Notice of acquisition",
        // ONIX Books 2.1 supply update – <SupplyDetail> only (not used in ONIX 3.0)
        "12" => "Update – SupplyDetail only",
        // ONIX Books 2.1 supply update – <MarketRepresentation> only (not used in ONIX 3.0)
        "13" => "Update – MarketRepresentation only",
        // ONIX Books 2.1 supply update – both <SupplyDetail> and <MarketRepresentation> (not used in ONIX 3.0)
        "14" => "Update – SupplyDetail and MarketRepresentation",
        /* ONIX 3.0 only. Record may be processed for test purposes, but data should be discarded. Sender must ensure the <RecordReference>
					matches a previously-sent Test record */
        "88" => "Test update (Partial)",
        /* Record may be processed for test purposes, but data should be discarded. Sender must ensure the <RecordReference> does not
					match any previously-sent live product record */
        "89" => "Test record",
    ];
}