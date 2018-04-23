<?php

namespace AragornYang\Onix\CodeLists;

class CodeList184EUToySafetyDirectiveHazardWarning extends CodeList
{
    public const KEY = 'EUToySafetyDirectiveHazardWarning';

    protected const MAPPING = [
        // Use to provide positive indication that no warnings are applicable
        "00" => "No warning",
        // 
        "01" => "Carries ‘CE’ logo",
        // Use to specify age (in years, or years and months). Provide specific wording in <ProductFormFeatureDescription>
        "02" => "Carries minimum age warning",
        /* Carries logo, and must be accompanied by the default warning ‘Not suitable for children under 36 months’ (or its approved
					equivalent in a language other than English, as appropriate), unless specific wording is provided in <ProductFormFeatureDescription>.
					If specific alternative wording is carried in <ProductFormFeatureDescription>, this must be used in place of the default text */
        "03" => "Carries EU Toy Safety Directive ‘Unsuitable for children ages 0–3’ warning logo",
        // Exact text of warning must be included in <ProductFormFeatureDescription>
        "04" => "Carries EU Toy Safety Directive hazard warning",
        /* Exact text (not in itself a warning) must be included in <ProductFormFeatureDescription>. May be used either without any warning,
					or as text additional to a warning. Note that if no warnings apply, code 00 can provide positive indication of this. Example
					use: ‘Suitable for all ages’ */
        "05" => "Carries other text associated with toy safety",
        /* Material Safety Data Sheet (a document required by the EU Toy Safety Directive) available online, typically as a PDF file
					or similar. <ProductFormFeatureDescription> must carry the URL of the document */
        "06" => "Material Safety Data Sheet available",
        /* Declaration of Conformity (the document that backs up the CE mark) available online, typically as a PDF file or similar. <ProductFormFeatureDescription>
					must carry the URL of the document */
        "07" => "Declaration of Conformity available",
    ];
}