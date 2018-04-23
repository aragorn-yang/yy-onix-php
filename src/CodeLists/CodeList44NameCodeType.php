<?php

namespace AragornYang\Onix\CodeLists;

class CodeList44NameCodeType extends CodeList
{
    public const KEY = 'NameCodeType';

    protected const MAPPING = [
        // Note that <IDTypeName> is required with proprietary identifiers
        "01" => "Proprietary",
        // DEPRECATED – use 01
        "02" => "Proprietary",
        // Deutsche Nationalbibliothek publisher identifier
        "03" => "DNB publisher identifier",
        // 
        "04" => "Börsenverein Verkehrsnummer",
        // 
        "05" => "German ISBN Agency publisher identifier",
        // GS1 global location number (formerly EAN location number)
        "06" => "GLN",
        // Book trade Standard Address Number – US, UK etc
        "07" => "SAN",
        // MARC code list for organizations – see http://www.loc.gov/marc/organizations/orgshome.html
        "08" => "MARC organization code",
        // Trading party identifier used in the Netherlands
        "10" => "Centraal Boekhuis Relatie ID",
        // Flemish publisher code
        "13" => "Fondscode Boekenbank",
        // Business Identity Code (Finland). See http://www.ytj.fi/ (in Finnish)
        "15" => "Y-tunnus",
        // International Standard Name Identifier. See http://www.isni.org/
        "16" => "ISNI",
        /* Personennamendatei – person name authority file used by Deutsche Nationalbibliothek and in other German-speaking countries.
					See http://www.d-nb.de/standardisierung/normdateien/pnd.htm (German) or http://www.d-nb.de/eng/standardisierung/normdateien/pnd.htm
					(English). DEPRECATED in favour of the GND */
        "17" => "PND",
        // A control number assigned to a Library of Congress Name Authority record
        "18" => "LCCN",
        // Publisher identifier administered by Japanese ISBN Agency
        "19" => "Japanese Publisher identifier",
        /* Gemeinsame Körperschaftsdatei – Corporate Body Authority File in the German-speaking countries. See http://www.d-nb.de/standardisierung/normdateien/gkd.htm
					(German) or http://www.d-nb.de/eng/standardisierung/normdateien/gkd.htm (English). DEPRECATED in favour of the GND */
        "20" => "GKD",
        // Open Researcher and Contributor ID. See http://www.orcid.org/
        "21" => "ORCID",
        // Publisher identifier maintained by the Chinese ISBN Agency (GAPP)
        "22" => "GAPP Publisher Identifier",
        /* Identifier for a business organization for VAT purposes, eg within the EU’s VIES system. See http://ec.europa.eu/taxation_customs/vies/faqvies.do
					for EU VAT ID formats, which vary from country to country. Generally these consist of a two-letter country code followed by
					the 8–12 digits of the national VAT ID. Some countries include one or two letters within their VAT ID. See http://en.wikipedia.org/wiki/VAT_identification_number
					for non-EU countries that maintain similar identifiers. Spaces, dashes etc should be omitted */
        "23" => "VAT Identity Number",
        // 4-digit business organization identifier controlled by the Japanese Publication Wholesalers Association
        "24" => "JP Distribution Identifier",
        /* Gemeinsame Normdatei – Joint Authority File in the German-speaking countries. See http://www.dnb.de/EN/gnd (English). Combines
					the PND, SWD and GKD into a single authority file, and should be used in preference */
        "25" => "GND",
        // Dunn and Bradstreet Universal Numbering System, see http://www.dnb.co.uk/dandb-duns-number
        "26" => "DUNS",
        // Ringgold organizational identifier, see http://www.ringgold.com/pages/identify.html
        "27" => "Ringgold ID",
        // French Electre publisher identifier
        "28" => "Identifiant Editeur Electre",
        // DOI used in EIDR party registry, for example ‘10.5237/C9F6-F41F’ (Sam Raimi). See http://eidr.org
        "29" => "EIDR Party DOI",
        // French Electre imprint Identifier
        "30" => "Identifiant Marque Electre",
        /* Virtual Internet Authority File. <IDValue> should be a number. The URI form of the identifier can be created by prefixing
					the number with ‘https://viaf.org/viaf/’. See https://viaf.org */
        "31" => "VIAF ID",
        /* DOI used in CrossRef’s Open Funder Registry list of academic research funding bodies, for example ‘10.13039/100004440’ (Wellcome
					Trust). See http://www.crossref.org/fundingdata/registry.html */
        "32" => "FundRef DOI",
        // Control number assigned to a Name Authority record by the Biblioteca Nacional de España
        "33" => "BNE CN",
    ];
}