<?php

namespace AragornYang\Onix\CodeLists;

class CodeList204ONIXReturnsConditions extends CodeList
{
    public const KEY = 'ONIXReturnsConditions';

    protected const MAPPING = [
        // Unspecified, contact supplier for details
        "00" => "Unspecified",
        /* The retailer pays for goods only after they are sold by the retailer to an end consumer, and may return excess unsold inventory
					to the supplier at any time. The goods remain the property of the supplier until they are paid for, even while they are physically
					located at the retailer */
        "01" => "Consignment",
        /* The retailer is invoiced and pays immediately as in the sale or return model, but any excess unsold inventory cannot be returned
					to the supplier */
        "02" => "Firm sale",
        /* Contact supplier for applicable returns authorization process. The retailer is invoiced immediately for the goods and pays
					within the specified credit period, but can return excess unsold inventory to the supplier for full credit at a later date
					(some kind of returns authorisation process is normally required, and returns of stripped covers or proof of destruction may
					be allowed instead) */
        "03" => "Sale or return",
        /* The retailer pays for goods only after they are sold by the retailer to an end consumer, but all inventory remains physically
					located at the supplier (thus there can be no returns of unsold inventory). When ordered by the retailer, the goods are delivered
					direct to the consumer */
        "04" => "Direct fulfillment",
    ];
}