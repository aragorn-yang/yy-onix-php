<?php

namespace AragornYang\Onix\CodeLists;

class CodeList92SupplierIdentifierType extends CodeList
{
    public const KEY = 'SupplierIdentifierType';

    protected const MAPPING = [
        // Note that <IDTypeName> is required with proprietary identifiers
        "01" => "Proprietary",
        // DEPRECATED – use 01
        "02" => "Proprietary",
        // 
        "04" => "Börsenverein Verkehrsnummer",
        // 
        "05" => "German ISBN Agency publisher identifier",
        // GS1 global location number (formerly EAN location number)
        "06" => "GLN",
        // Book trade Standard Address Number – US, UK etc
        "07" => "SAN",
        // Flemish supplier code
        "12" => "Distributeurscode Boekenbank",
        // Flemish publisher code
        "13" => "Fondscode Boekenbank",
        /* Identifier for a business organization for VAT purposes, eg within the EU’s VIES system. See http://ec.europa.eu/taxation_customs/vies/faqvies.do
					for EU VAT ID formats, which vary from country to country. Generally these consist of a two-letter country code followed by
					the 8–12 digits of the national VAT ID. Some countries include one or two letters within their VAT ID. See http://en.wikipedia.org/wiki/VAT_identification_number
					for non-EU countries that maintain similar identifiers. Spaces, dashes etc should be omitted */
        "23" => "VAT Identity Number",
    ];
}