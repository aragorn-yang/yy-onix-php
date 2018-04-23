<?php

namespace AragornYang\Onix\CodeLists;

class CodeList38ImageAudioVideoFileType extends CodeList
{
    public const KEY = 'ImageAudioVideoFileType';

    protected const MAPPING = [
        // Link to a location where the whole product may be found – used for epublications
        "01" => "Whole product",
        // 
        "02" => "Application: software demo",
        /* Includes cover, back cover, spine and – where appropriate – any flaps. Quality unspecified: if sending both a standard quality
					and a high quality image, use 03 for standard quality and 05 for high quality */
        "03" => "Image: whole cover",
        /* Quality unspecified: if sending both a standard quality and a high quality image, use 04 for standard quality and 06 for high
					quality */
        "04" => "Image: front cover",
        // Should have a minimum resolution of 300 dpi when rendered at the intended size for display or print
        "05" => "Image: whole cover, high quality",
        // Should have a minimum resolution of 300 dpi when rendered at the intended size for display or print
        "06" => "Image: front cover, high quality",
        // 
        "07" => "Image: front cover thumbnail",
        // 
        "08" => "Image: contributor(s)",
        // Use for an image, other than a logo, that is part of the ‘branding’ of a series
        "10" => "Image: for series",
        // 
        "11" => "Image: series logo",
        // Use only for a logo which is specific to an individual product
        "12" => "Image: product logo",
        // 
        "16" => "Image: Master brand logo",
        // 
        "17" => "Image: publisher logo",
        // 
        "18" => "Image: imprint logo",
        // 
        "22" => "Image: table of contents",
        // Use for inside page image for book, or screenshot for software or game (revised definition from Issue 8)
        "23" => "Image: sample content",
        /* Quality unspecified: if sending both a standard quality and a high quality image, use 24 for standard quality and 25 for high
					quality */
        "24" => "Image: back cover",
        // Should have a minimum resolution of 300 dpi when rendered at the intended size for display or print
        "25" => "Image: back cover, high quality",
        // 
        "26" => "Image: back cover thumbnail",
        // 
        "27" => "Image: other cover material",
        // 
        "28" => "Image: promotional material",
        // 
        "29" => "Video segment: unspecified",
        // 
        "30" => "Audio segment: unspecified",
        // 
        "31" => "Video: author presentation / commentary",
        // 
        "32" => "Video: author interview",
        // 
        "33" => "Video: author reading",
        // 
        "34" => "Video: cover material",
        // 
        "35" => "Video: sample content",
        // 
        "36" => "Video: promotional material",
        // 
        "37" => "Video: review",
        // 
        "38" => "Video: other commentary / discussion",
        // 
        "41" => "Audio: author presentation / commentary",
        // 
        "42" => "Audio: author interview",
        // 
        "43" => "Audio: author reading",
        // 
        "44" => "Audio: sample content",
        // 
        "45" => "Audio: promotional material",
        // 
        "46" => "Audio: review",
        // 
        "47" => "Audio: other commentary / discussion",
        // Use for ‘look inside’ facility or ‘widget’
        "51" => "Application: sample content",
        // 
        "52" => "Application: promotional material",
    ];
}