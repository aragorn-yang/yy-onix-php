<?php

namespace AragornYang\Onix\CodeLists;

class CodeList9ProductClassificationType extends CodeList
{
    public const KEY = 'ProductClassificationType';

    protected const MAPPING = [
        // World Customs Organization Harmonized Commodity Coding and Description System. Use 6 or 8 digits, without punctuation
        "01" => "WCO Harmonized System",
        // UN Standard Product and Service Classification
        "02" => "UNSPSC",
        // UK Revenue and Customs classifications, based on the Harmonized System
        "03" => "HMRC",
        // German export trade classification, based on the Harmonised System
        "04" => "Warenverzeichnis für die Außenhandelsstatistik",
        // EU TARIC codes, an extended version of the Harmonized System
        "05" => "TARIC",
        // Centraal Boekhuis free classification field for publishers
        "06" => "Fondsgroep",
        // A product category (not a subject classification) assigned by the sender
        "07" => "Sender’s product category",
        // Product classification maintained by the Chinese General Administration of Press and Publication (http://www.gapp.gov.cn)
        "08" => "GAPP Product Class",
        /* Statistical Classification of Products by Activity in the European Economic Community, see http://ec.europa.eu/eurostat/ramon/nomenclatures/index.cfm?TargetUrl=LST_NOM_DTL&StrNom=CPA_2008.
					Up to six digits, with one or two periods. For example, printed children’s books are ‘58.11.13’, but the periods are normally
					ommited in ONIX */
        "09" => "CPA",
        // Mercosur/Mercosul Common Nomenclature, based on the Harmonised System
        "10" => "NCM",
        /* Common Procurement Vocabulary, uses to describe requirements for tender for public tendering and procurement within the EU.
					Code is a nine digit number (including the check digit). See http://eur-lex.europa.eu/legal-content/EN/TXT/?uri=URISERV:l22008 */
        "11" => "CPV",
        // Typologie de marché géré par Electre (Market segment code maintained by Electre)
        "50" => "Electre genre",
    ];
}