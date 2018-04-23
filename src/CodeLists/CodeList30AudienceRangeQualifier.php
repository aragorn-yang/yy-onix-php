<?php

namespace AragornYang\Onix\CodeLists;

class CodeList30AudienceRangeQualifier extends CodeList
{
    public const KEY = 'AudienceRangeQualifier';

    protected const MAPPING = [
        // Values for <AudienceRangeValue> are specified in List 77
        "11" => "US school grade range",
        // Values are defined by BIC for England and Wales, Scotland and N Ireland
        "12" => "UK school grade",
        // Values in <AudienceRangeValue> must be integers
        "15" => "Reading speed, words per minute",
        // For use up to 36 months only: values in <AudienceRangeValue> must be integers
        "16" => "Interest age, months",
        // Values in <AudienceRangeValue> must be integers
        "17" => "Interest age, years",
        // Values in <AudienceRangeValue> must be integers
        "18" => "Reading age, years",
        // Spain: combined grade and region code, maintained by the Ministerio de Educación
        "19" => "Spanish school grade",
        // Norwegian educational level for primary and secondary education
        "20" => "Skoletrinn",
        // Swedish educational qualifier (code)
        "21" => "Nivå",
        // 
        "22" => "Italian school grade",
        // DEPRECATED – assigned in error: see List 29
        "23" => "Schulform",
        // DEPRECATED – assigned in error: see List 29
        "24" => "Bundesland",
        // DEPRECATED – assigned in error: see List 29
        "25" => "Ausbildungsberuf",
        // Values for <AudienceRangeValue> are specified in List 77
        "26" => "Canadian school grade range",
        // 
        "27" => "Finnish school grade range",
        // Lukion kurssi
        "28" => "Finnish Upper secondary school course",
        // Values are P, K, 1–17 (including college-level audiences), see List 227
        "29" => "Chinese School Grade range",
        // French educational level classification scolomfr-voc-022, used for example on WizWiz.fr. See http://www.lom-fr.fr/scolomfr/vocabulaires/consultation-des-vocabulaires.html
        "30" => "Nomenclature niveaux",
    ];
}