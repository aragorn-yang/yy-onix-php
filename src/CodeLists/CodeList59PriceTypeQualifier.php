<?php

namespace AragornYang\Onix\CodeLists;

class CodeList59PriceTypeQualifier extends CodeList
{
    public const KEY = 'PriceTypeQualifier';

    protected const MAPPING = [
        // Price applies to all customers that do not fall within any other group with a specified group-specific qualified price
        "00" => "Unqualified price",
        // Price applies to a designated group membership
        "01" => "Member/subscriber price",
        // Price applies to sales outside the territory in which the supplier is located
        "02" => "Export price",
        /* Use in cases where there is no combined price, but a lower price is offered for each part if the whole set / series / collection
					is purchased (either at one time, as part of a continuing commitment, or in a single purchase) */
        "03" => "Reduced price applicable when the item is purchased as part of a set (or series, or collection)",
        /* In the Netherlands (or any other market where similar arrangements exist): a reduced fixed price available for a limited time
					on presentation of a voucher or coupon published in a specified medium, eg a newspaper. Should be accompanied by Price Type
					code 13 and additional detail in <PriceTypeDescription>, and by validity dates in <PriceEffectiveFrom> and <PriceEffectiveUntil>
					(ONIX 2.1) or in the <PriceDate> composite (ONIX 3.0) */
        "04" => "Voucher price",
        // Price for individual consumer sale only
        "05" => "Consumer price",
        // Price for sale to libraries or other corporate or institutional customers
        "06" => "Corporate / Library / Education price",
        /* Price valid for a specified period prior to publication. Orders placed prior to the end of the period are guaranteed to be
					delivered to the retailer before the nominal publication date. The price may or may not be different from the ‘normal’ price,
					which carries no such delivery guarantee. Must be accompanied by a <PriceEffectiveUntil> date (or equivalent <PriceDate> composite
					in ONIX 3), and should also be accompanied by a ‘normal’ price */
        "07" => "Reservation order price",
        /* Temporary ‘Special offer’ price. Must be accompanied by <PriceEffectiveFrom> and <PriceEffectiveUntil> dates (or equivalent
					<PriceDate> composites in ONIX 3), and may also be accompanied by a ‘normal’ price */
        "08" => "Promotional offer price",
        /* Price requires purchase with, or proof of ownership of another product. Further details of purchase or ownership requirements
					must be given in <PriceTypeDescription> */
        "09" => "Linked price",
        // Price for sale only to libraries (including public, school and academic libraries)
        "10" => "Library price",
        /* Price for sale only to educational institutions (including school and academic libraries), educational buying consortia, government
					and local government bodies purchasing for use in education */
        "11" => "Education price",
        // Price for sale to corporate customers only
        "12" => "Corporate price",
        // Price for sale to organisations or services offering consumers subscription access to a library of books
        "13" => "Subscription service price",
        // Price for primary and secondary education
        "14" => "School library price",
        // Price for higher education and scholarly institutions
        "15" => "Academic library price",
        // 
        "16" => "Public library price",
    ];
}