<?php

namespace AragornYang\Onix\CodeLists;

class CodeList68MarketPublishingStatus extends CodeList
{
    public const KEY = 'MarketPublishingStatus';

    protected const MAPPING = [
        // Status is not specified (as distinct from unknown): the default if the <MarketPublishingStatus> element is not sent
        "00" => "Unspecified",
        /* The product was announced for publication in this market, and subsequently abandoned. A market publication date must not be
					sent */
        "01" => "Cancelled",
        // Not yet published in this market, should be accompanied by expected local publication date
        "02" => "Forthcoming",
        /* The product was announced for publication in this market, and subsequently postponed with no expected local publication date.
					A market publication date must not be sent */
        "03" => "Postponed indefinitely",
        /* The product was published in this market, and is still active in the sense that the publisher will accept orders for it, though
					it may or may not be immediately available, for which see <SupplyDetail> */
        "04" => "Active",
        /* Responsibility for the product in this market has been transferred elsewhere (with details of acquiring publisher representative
					in this market if possible in PR.25 (ONIX 2.1) OR P.25 (ONIX 3.0)) */
        "05" => "No longer our product",
        /* The product was active in this market, but is now inactive in the sense that (a) the publisher representative (local publisher
					or sales agent) cannot fulfill orders for it, though stock may still be available elsewhere in the supply chain, and (b) there
					are no current plans to bring it back into stock in this market. Code 06 does not specifically imply that returns are or are
					not still accepted */
        "06" => "Out of stock indefinitely",
        /* The product was active in this market, but is now permanently inactive in this market in the sense that (a) the publisher
					representative (local publisher or sales agent) will not accept orders for it, though stock may still be available elsewhere
					in the supply chain, and (b) the product will not be made available again in this market under the same ISBN. Code 07 normally
					implies that the publisher will not accept returns beyond a specified date */
        "07" => "Out of print",
        /* The product was active in this market, but is now permanently or indefinitely inactive in the sense that the publisher representative
					(local publisher or sales agent) will not accept orders for it, though stock may still be available elsewhere in the supply
					chain. Code 08 covers both of codes 06 and 07, and may be used where the distinction between those values is either unnecessary
					or meaningless */
        "08" => "Inactive",
        // The sender of the ONIX record does not know the current publishing status in this market
        "09" => "Unknown",
        /* The product is no longer available in this market from the publisher representative (local publisher or sales agent), under
					the current ISBN, at the current price. It may be available to be traded through another channel, usually at a reduced price */
        "10" => "Remaindered",
        // Withdrawn from sale in this market, typically for legal reasons or to avoid giving offence
        "11" => "Withdrawn from sale",
        /* Either no rights are held for the product in this market, or for other reasons the publisher has decided not to make it available
					in this market */
        "12" => "Not available in this market",
        /* The product is published in this market and active but, as a publishing decision, it is not sold separately – only in an assembly
					or as part of a package. Depending on product composition and pricing, it may be saleable separately at retail */
        "13" => "Active, but not sold separately",
        /* The product is published in this market and active, but is not available to all customer types, typically because the market
					is split between exclusive sales agents for different market segments. In ONIX 2.1, should be accompanied by a free-text statement
					in <MarketRestrictionDetail> describing the nature of the restriction. In ONIX 3.0, the <SalesRestriction> composite in Group
					P.24 should be used */
        "14" => "Active, with market restrictions",
        // Recalled in this market for reasons of consumer safety
        "15" => "Recalled",
        /* Temporarily withdrawn from sale in this market, typically for quality or technical reasons. In ONIX 3.0, must be accompanied
					by expected availability date coded ‘22’ within the <MarketPublishingDate> composite, except in exceptional circumstances
					where no date is known */
        "16" => "Temporarily withdrawn from sale",
    ];
}