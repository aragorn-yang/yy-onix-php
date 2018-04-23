<?php

namespace AragornYang\Onix\CodeLists;

class CodeList167PriceConditionType extends CodeList
{
    public const KEY = 'PriceConditionType';

    protected const MAPPING = [
        // Allows positive indication that there are no conditions (the default if <PriceCondition> is omitted)
        "00" => "No conditions",
        // Purchase at this price includes specified updates
        "01" => "Includes updates",
        // Purchase at this price requires commitment to purchase specified updates, not included in price
        "02" => "Must also purchase updates",
        // Updates may be purchased separately, no minimum commitment required
        "03" => "Updates available",
        // Purchase at this price requires prior purchase of other product
        "05" => "Linked prior purchase price",
        // Purchase at this price requires simultaneous purchase of other product
        "06" => "Linked price",
        // The duration of the rental to which the price applies. Deprecated, use <PriceConstraint> instead
        "10" => "Rental duration",
        /* Purchase at this price requires prior rental of the product. <PriceConditionQuantity> gives minimum prior rental period, and
					<ProductIdentifier> may be used if rental uses a different product identifier */
        "11" => "Rental to purchase",
        /* Upgrade to longer rental duration. <PriceConditionQuantity> gives minimum prior rental duration, and <ProductIdentifier> may
					be used if rental uses a different product identifier. Separate price constraint with time limited licence duration (code
					07) specifies the new combined rental duration */
        "12" => "Rental extension",
    ];
}