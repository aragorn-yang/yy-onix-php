<?php

namespace AragornYang\Onix\CodeLists;

class CodeList144EPublicationTechnicalProtection extends CodeList
{
    public const KEY = 'EPublicationTechnicalProtection';

    protected const MAPPING = [
        // Has no technical protection
        "00" => "None",
        // Has DRM protection
        "01" => "DRM",
        // Has digital watermarking
        "02" => "Digital watermarking",
        // Has DRM protection applied by the Adobe CS4 Content Server Package or by the Adobe ADEPT hosted service
        "03" => "Adobe DRM",
        // Has 'FairPlay’ DRM protection applied via Apple proprietary online store
        "04" => "Apple DRM",
        // Has OMA v2 DRM protection applied, as used to protect some mobile phone content
        "05" => "OMA DRM",
        // Has ‘Licensed Content Protection' DRM applied by a Readium License Server
        "06" => "Readium LCP DRM",
        // Has Sony DADC User Rights Management (URMS) DRM protection applied
        "07" => "Sony DRM",
    ];
}