<?php

namespace AragornYang\Onix\CodeLists;

class CodeList64PublishingStatus extends CodeList
{
    public const KEY = 'PublishingStatus';

    protected const MAPPING = [
        /* Status is not specified (as distinct from unknown): the default if the <PublishingStatus> element is not sent. Also to be
					used in applications where the element is considered mandatory, but the sender of the ONIX message chooses not to pass on
					status information */
        "00" => "Unspecified",
        /* The product was announced, and subsequently abandoned; the <PublicationDate> element in ONIX 2.1 or its equivalent in <PublishingDate>
					in ONIX 3.0 must not be sent */
        "01" => "Cancelled",
        /* Not yet published, must be accompanied by the expected date in <PublicationDate> in ONIX 2.1, or its equivalent in the <PublishingDate>
					composite in ONIX 3.0 */
        "02" => "Forthcoming",
        /* The product was announced, and subsequently postponed with no expected publication date; the <Publication Date> element in
					ONIX 2.1, or its equivalent as a <PublishingDate> composite in ONIX 3.0, must not be sent */
        "03" => "Postponed indefinitely",
        /* The product was published, and is still active in the sense that the publisher will accept orders for it, though it may or
					may not be immediately available, for which see <SupplyDetail> */
        "04" => "Active",
        /* Ownership of the product has been transferred to another publisher (with details of acquiring publisher if possible in PR.19
					(ONIX 2.1) OR P.19 (ONIX 3.0)) */
        "05" => "No longer our product",
        /* The product was active, but is now inactive in the sense that (a) the publisher cannot fulfill orders for it, though stock
					may still be available elsewhere in the supply chain, and (b) there are no current plans to bring it back into stock. Use
					this code for ‘reprint under consideration’. Code 06 does not specifically imply that returns are or are not still accepted */
        "06" => "Out of stock indefinitely",
        /* The product was active, but is now permanently inactive in the sense that (a) the publisher will not accept orders for it,
					though stock may still be available elsewhere in the supply chain, and (b) the product will not be made available again under
					the same ISBN. Code 07 normally implies that the publisher will not accept returns beyond a specified date */
        "07" => "Out of print",
        /* The product was active, but is now permanently or indefinitely inactive in the sense that the publisher will not accept orders
					for it, though stock may still be available elsewhere in the supply chain. Code 08 covers both of codes 06 and 07, and may
					be used where the distinction between those values is either unnecessary or meaningless */
        "08" => "Inactive",
        // The sender of the ONIX record does not know the current publishing status
        "09" => "Unknown",
        /* The product is no longer available from the current publisher, under the current ISBN, at the current price. It may be available
					to be traded through another channel. A Publishing Status code 10 ‘Remaindered’ usually but not always means that the publisher
					has decided to sell off excess inventory of the book. Copies of books that are remaindered are often made available in the
					supply chain at a reduced price. However, such remainders are often sold under a product identifier that differs from the
					ISBN on the full-priced copy of the book. A Publishing Status code 10 ‘Remaindered’ on a given product record may or may not
					be followed by a Publishing Status code 06 ‘Out of Stock Indefinitely’ or 07 ‘Out of Print’: the practise varies from one
					publisher to another. Some publishers may revert to a Publishing Status code 04 ‘Active’ if a desired inventory level on the
					product in question has subsequently been reached. No change in rights should ever be inferred from this (or any other) Publishing
					Status code value */
        "10" => "Remaindered",
        // Withdrawn, typically for legal reasons or to avoid giving offence
        "11" => "Withdrawn from sale",
        // Recalled for reasons of consumer safety. Deprecated, use code 15 instead
        "12" => "Recalled",
        // Recalled for reasons of consumer safety
        "15" => "Recalled",
        /* Withdrawn temporarily, typically for quality or technical reasons. In ONIX 3.0, must be accompanied by expected availability
					date coded ‘22’ within the <PublishingDate> composite, except in exceptional circumstances where no date is known */
        "16" => "Temporarily withdrawn from sale",
        /* Withdrawn permanently from sale in all markets. Effectively synonymous with ‘Out of print’ (code 07), but specific to downloadable
					and online digital products (where no ‘stock’ would remain in the supply chain) */
        "17" => "Permanently withdrawn from sale",
    ];
}