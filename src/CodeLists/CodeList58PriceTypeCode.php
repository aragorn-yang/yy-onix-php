<?php

namespace AragornYang\Onix\CodeLists;

class CodeList58PriceTypeCode extends CodeList
{
    public const KEY = 'PriceTypeCode';

    protected const MAPPING = [
        // RRP excluding any sales tax or value-added tax
        "01" => "RRP excluding tax",
        // RRP including sales or value-added tax if applicable
        "02" => "RRP including tax",
        // In countries where retail price maintenance applies by law to certain products: not used in USA
        "03" => "Fixed retail price excluding tax",
        // In countries where retail price maintenance applies by law to certain products: not used in USA
        "04" => "Fixed retail price including tax",
        // Unit price charged by supplier to reseller excluding any sales tax or value-added tax: goods for retail sale
        "05" => "Supplier’s net price excluding tax",
        /* Unit price charged by supplier to reseller / rental outlet, excluding any sales tax or value-added tax: goods for rental (used
					for video and DVD) */
        "06" => "Supplier’s net price excluding tax: rental goods",
        // Unit price charged by supplier to reseller including any sales tax or value-added tax if applicable: goods for retail sale
        "07" => "Supplier’s net price including tax",
        /* Unit price charged by supplier to a specified class of reseller excluding any sales tax or value-added tax: goods for retail
					sale (this value is for use only in countries, eg Finland, where trade practice requires two different net prices to be listed
					for different classes of resellers, and where national guidelines specify how the code should be used) */
        "08" => "Supplier’s alternative net price excluding tax",
        /* Unit price charged by supplier to a specified class of reseller including any sales tax or value-added tax: goods for retail
					sale (this value is for use only in countries, eg Finland, where trade practice requires two different net prices to be listed
					for different classes of resellers, and where national guidelines specify how the code should be used) */
        "09" => "Supplier’s alternative net price including tax",
        /* Special sale RRP excluding any sales tax or value-added tax. Note ‘special sales’ are sales where terms and conditions are
					different from normal trade sales, when for example products that are normally sold on a sale-or-return basis are sold on
					firm-sale terms, where a particular product is tailored for a specific retail outlet (often termed a ‘premium’ product), or
					where other specific conditions or qualiifications apply. Further details of the modified terms and conditions should be given
					in <PriceTypeDescription> */
        "11" => "Special sale RRP excluding tax",
        // Special sale RRP including sales or value-added tax if applicable
        "12" => "Special sale RRP including tax",
        // In countries where retail price maintenance applies by law to certain products: not used in USA
        "13" => "Special sale fixed retail price excluding tax",
        // In countries where retail price maintenance applies by law to certain products: not used in USA
        "14" => "Special sale fixed retail price including tax",
        // Unit price charged by supplier to reseller for special sale excluding any sales tax or value-added tax
        "15" => "Supplier’s net price for special sale excluding tax",
        // Unit price charged by supplier to reseller for special sale including any sales tax or value-added tax
        "17" => "Supplier’s net price for special sale including tax",
        /* Pre-publication RRP excluding any sales tax or value-added tax. Use where RRP for pre-orders is different from post-publication
					RRP */
        "21" => "Pre-publication RRP excluding tax",
        /* Pre-publication RRP including sales or value-added tax if applicable. Use where RRP for pre-orders is different from post-publication
					RRP */
        "22" => "Pre-publication RRP including tax",
        // In countries where retail price maintenance applies by law to certain products: not used in USA
        "23" => "Pre-publication fixed retail price excluding tax",
        // In countries where retail price maintenance applies by law to certain products: not used in USA
        "24" => "Pre-publication fixed retail price including tax",
        // Unit price charged by supplier to reseller pre-publication excluding any sales tax or value-added tax
        "25" => "Supplier’s pre-publication net price excluding tax",
        // Unit price charged by supplier to reseller pre-publication including any sales tax or value-added tax
        "27" => "Supplier’s pre-publication net price including tax",
        /* In the US, books are sometimes supplied on ‘freight-pass-through’ terms, where a price that is different from the RRP is used
					as the basis for calculating the supplier’s charge to a reseller. To make it clear when such terms are being invoked, code
					31 is used instead of code 01 to indicate the RRP. Code 32 is used for the ‘billing price’ */
        "31" => "Freight-pass-through RRP excluding tax",
        /* When freight-pass-through terms apply, the price on which the supplier’s charge to a reseller is calculated, ie the price
					to which trade discount terms are applied. See also code 31 */
        "32" => "Freight-pass-through billing price excluding tax",
        /* In countries where retail price maintenance applies by law to certain products, but the price is set by the importer or local
					sales agent, not the foreign publisher. In France, ‘prix catalogue éditeur étranger’ */
        "33" => "Importer’s Fixed retail price excluding tax",
        /* In countries where retail price maintenance applies by law to certain products, but the price is set by the importer or local
					sales agent, not the foreign publisher. In France, ‘prix catalogue éditeur étranger’ */
        "34" => "Importer’s Fixed retail price including tax",
        // For a product supplied on agency terms, the retail price set by the publisher, excluding any sales tax or value-added tax
        "41" => "Publishers retail price excluding tax",
        // For a product supplied on agency terms, the retail price set by the publisher, including sales or value-added tax if applicable
        "42" => "Publishers retail price including tax",
    ];
}