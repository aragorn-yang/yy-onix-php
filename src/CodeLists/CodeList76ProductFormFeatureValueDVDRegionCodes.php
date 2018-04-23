<?php

namespace AragornYang\Onix\CodeLists;

class CodeList76ProductFormFeatureValueDVDRegionCodes extends CodeList
{
    public const KEY = 'ProductFormFeatureValueDVDRegionCodes';

    protected const MAPPING = [
        // DVD or Blu-Ray
        "0" => "All regions",
        // US, US Territories, Canada
        "1" => "DVD region 1",
        // Japan, Europe, South Africa and Middle East (including Egypt)
        "2" => "DVD region 2",
        // Southeast Asia, Hong Kong, Macau, South Korea, and Taiwan
        "3" => "DVD region 3",
        // Australia, New Zealand, Pacific Islands, Central America, Mexico, South America and the Caribbean
        "4" => "DVD region 4",
        // Eastern Europe (former Soviet Union), Indian subcontinent, Africa, North Korea and Mongolia
        "5" => "DVD region 5",
        // People’s Republic of China (except Macau and Hong Kong)
        "6" => "DVD region 6",
        // Reserved for future use
        "7" => "DVD region 7",
        // International venues: aircraft, cruise ships etc
        "8" => "DVD region 8",
        // North America, Central America, South America, Japan, Taiwan, North Korea, South Korea, Hong Kong, and Southeast Asia
        "A" => "Blu-Ray region A",
        // Most of Europe, Greenland, French territories, Middle East, Africa, Australia, and New Zealand, plus all of Oceania
        "B" => "Blu-Ray region B",
        // India, Bangladesh, Nepal, Mainland China, Pakistan, Russia, Ukraine, Belarus, Central, and South Asia
        "C" => "Blu-Ray region C",
    ];
}