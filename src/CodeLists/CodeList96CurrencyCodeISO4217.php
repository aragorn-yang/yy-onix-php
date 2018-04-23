<?php

namespace AragornYang\Onix\CodeLists;

class CodeList96CurrencyCodeISO4217 extends CodeList
{
    public const KEY = 'CurrencyCodeISO4217';

    protected const MAPPING = [
        // United Arab Emirates
        "AED" => "UAE Dirham",
        // Afghanistan. DEPRECATED, replaced by AFN
        "AFA" => "Afghani",
        // Afghanistan (prices normally quoted as integers)
        "AFN" => "Afghani",
        // Albania (prices normally quoted as integers)
        "ALL" => "Lek",
        // Armenia (prices normally quoted as integers)
        "AMD" => "Armenian Dram",
        // Curaçao, Sint Maarten
        "ANG" => "Netherlands Antillian Guilder",
        // Angola
        "AOA" => "Kwanza",
        // Argentina
        "ARS" => "Argentine Peso",
        // Austria. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "ATS" => "Schilling",
        /* Australia, Christmas Island, Cocos (Keeling) Islands, Heard Island and McDonald Islands, Kiribati, Nauru, Norfolk Island,
					Tuvalu */
        "AUD" => "Australian Dollar",
        // Aruba
        "AWG" => "Aruban Florin",
        // Azerbaijan
        "AZN" => "Azerbaijanian Manat",
        // Bosnia and Herzegovina
        "BAM" => "Convertible Marks",
        // Barbados
        "BBD" => "Barbados Dollar",
        // Bangladesh
        "BDT" => "Taka",
        // Belgium. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "BEF" => "Belgian Franc",
        // DEPRECATED, replaced by BGN
        "BGL" => "Bulgarian Lev",
        // Bulgaria
        "BGN" => "Bulgarian Lev",
        // Bahrain (prices normally quoted with 3 decimal places)
        "BHD" => "Bahraini Dinar",
        // Burundi (prices normally quoted as integers)
        "BIF" => "Burundi Franc",
        // Bermuda
        "BMD" => "Bermudian Dollar",
        // Brunei Darussalam
        "BND" => "Brunei Dollar",
        // Bolivia
        "BOB" => "Boliviano",
        // Brazil
        "BRL" => "Brazilian Real",
        // Bahamas
        "BSD" => "Bahamian Dollar",
        // Bhutan
        "BTN" => "Ngultrun",
        // Botswana
        "BWP" => "Pula",
        /* Belarus (prices normally quoted as integers). Now replaced by new Belarussian Ruble (BYN): use only for historical prices
					that pre-date the introduction of the new Belarussian Ruble */
        "BYR" => "Belarussian Ruble",
        // Belarus
        "BYN" => "Belarussian Ruble",
        // Belize
        "BZD" => "Belize Dollar",
        // Canada
        "CAD" => "Canadian Dollar",
        // Congo (Democratic Republic of the)
        "CDF" => "Franc Congolais",
        // Switzerland, Liechtenstein
        "CHF" => "Swiss Franc",
        // Chile (prices normally quoted as integers)
        "CLP" => "Chilean Peso",
        // China
        "CNY" => "Yuan Renminbi",
        // Colombia (prices normally quoted as integers)
        "COP" => "Colombian Peso",
        // Costa Rica (prices normally quoted as integers)
        "CRC" => "Costa Rican Colon",
        // Deprecated, replaced by RSD
        "CSD" => "Serbian Dinar",
        // Cuba (alternative currency)
        "CUC" => "Cuban Convertible Peso",
        // Cuba
        "CUP" => "Cuban Peso",
        // Cabo Verde (prices normally quoted as integers)
        "CVE" => "Cabo Verde Escudo",
        // Cyprus. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "CYP" => "Cyprus Pound",
        // Czech Republic
        "CZK" => "Czech Koruna",
        // Germany. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "DEM" => "Mark",
        // Djibouti (prices normally quoted as integers)
        "DJF" => "Djibouti Franc",
        // Denmark, Faroe Islands, Greenland
        "DKK" => "Danish Krone",
        // Dominican Republic
        "DOP" => "Dominican Peso",
        // Algeria
        "DZD" => "Algerian Dinar",
        // Estonia.Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "EEK" => "Kroon",
        // Egypt
        "EGP" => "Egyptian Pound",
        // Eritrea
        "ERN" => "Nakfa",
        /* Spain. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro (prices normally
					quoted as integers) */
        "ESP" => "Peseta",
        // Ethiopia
        "ETB" => "Ethiopian Birr",
        /* Eurozone: Andorra, Austria, Belgium, Cyprus, Estonia, Finland, France, Fr Guiana, Fr S Territories, Germany, Greece, Guadeloupe,
					Holy See (Vatican City), Ireland, Italy, Latvia, Lithuania, Luxembourg, Martinique, Malta, Mayotte, Monaco, Montenegro, Netherlands,
					Portugal, Réunion, St Barthelemy, St Martin, St Pierre and Miquelon, San Marino, Slovakia, Slovenia, Spain */
        "EUR" => "Euro",
        // Finland. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "FIM" => "Markka",
        // Fiji
        "FJD" => "Fiji Dollar",
        // Falkland Islands (Malvinas)
        "FKP" => "Falkland Islands Pound",
        // France. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "FRF" => "Franc",
        // United Kingdom, Isle of Man, Channel Islands, South Georgia, South Sandwich Islands
        "GBP" => "Pound Sterling",
        // Georgia
        "GEL" => "Lari",
        // Deprecated, replaced by GHS
        "GHC" => "Ghana Cedi",
        // Ghana
        "GHS" => "Ghana Cedi",
        // Gibraltar
        "GIP" => "Gibraltar Pound",
        // Gambia
        "GMD" => "Dalasi",
        // Guinea (prices normally quoted as integers)
        "GNF" => "Guinea Franc",
        // Greece. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "GRD" => "Drachma",
        // Guatemala
        "GTQ" => "Quetzal",
        // Now replaced by the CFA Franc BCEAO XOF use only for historical prices that pre-date use of the CFA Franc
        "GWP" => "Guinea-Bissau Peso",
        // Guyana (prices normally quoted as integers)
        "GYD" => "Guyana Dollar",
        // Hong Kong
        "HKD" => "Hong Kong Dollar",
        // Honduras
        "HNL" => "Lempira",
        // Croatia
        "HRK" => "Kuna",
        // Haiti
        "HTG" => "Gourde",
        // Hungary (prices normally quoted as integers)
        "HUF" => "Forint",
        // Indonesia (prices normally quoted as integers)
        "IDR" => "Rupiah",
        // Ireland. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "IEP" => "Punt",
        // Israel
        "ILS" => "New Israeli Sheqel",
        // India, Bhutan (prices normally quoted as integers)
        "INR" => "Indian Rupee",
        // Iraq (prices normally quoted as integers)
        "IQD" => "Iraqi Dinar",
        // Iran (Islamic Republic of) (prices normally quoted as integers)
        "IRR" => "Iranian Rial",
        // Iceland (prices normally quoted as integers)
        "ISK" => "Iceland Krona",
        /* italy. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro (prices normally
					quoted as integers) */
        "ITL" => "Lira",
        // Jamaica
        "JMD" => "Jamaican Dollar",
        // Jordan (prices normally quoted with 3 decimal places)
        "JOD" => "Jordanian Dinar",
        // Japan (prices normally quoted as integers)
        "JPY" => "Yen",
        // Kenya
        "KES" => "Kenyan Shilling",
        // Kyrgyzstan
        "KGS" => "Som",
        // Cambodia
        "KHR" => "Riel",
        // Comoros (prices normally quoted as integers)
        "KMF" => "Comoro Franc",
        // Korea (Democratic People’s Republic of) (prices normally quoted as integers)
        "KPW" => "North Korean Won",
        // Korea (Republic of) (prices normally quoted as integers)
        "KRW" => "Won",
        // Kuwait (prices normally quoted with 3 decimal places)
        "KWD" => "Kuwaiti Dinar",
        // Cayman Islands
        "KYD" => "Cayman Islands Dollar",
        // Kazakstan
        "KZT" => "Tenge",
        // Lao People’s Democratic Republic (prices normally quoted as integers)
        "LAK" => "Kip",
        // Lebanon (prices normally quoted as integers)
        "LBP" => "Lebanese Pound",
        // Sri Lanka
        "LKR" => "Sri Lanka Rupee",
        // Liberia
        "LRD" => "Liberian Dollar",
        // Lesotho
        "LSL" => "Loti",
        // Lithuania. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "LTL" => "Litus",
        /* Luxembourg. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro (prices
					normally quoted as integers) */
        "LUF" => "Luxembourg Franc",
        // Latvia. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "LVL" => "Latvian Lats",
        // Libyan Arab Jamahiriya (prices normally quoted with 3 decimal places)
        "LYD" => "Libyan Dinar",
        // Morocco, Western Sahara
        "MAD" => "Moroccan Dirham",
        // Moldova, Republic of
        "MDL" => "Moldovan Leu",
        // Madagascar (prices normally quoted with 0 or 1 decimal place – 1 iraimbilanja = Ar0.2)
        "MGA" => "Malagasy Ariary",
        // Now replaced by the Ariary (MGA) (prices normally quoted as integers)
        "MGF" => "Malagasy Franc",
        // Macedonia (former Yugoslav Republic of)
        "MKD" => "Denar",
        // Myanmar (prices normally quoted as integers)
        "MMK" => "Kyat",
        // Mongolia (prices normally quoted as integers)
        "MNT" => "Tugrik",
        // Macau
        "MOP" => "Pataca",
        // Mauritania (0 or 1 – 1 khoums = UM0.2)
        "MRO" => "Ouguiya",
        // Malta. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "MTL" => "Maltese Lira",
        // Mauritius (prices normally quoted as integers)
        "MUR" => "Mauritius Rupee",
        // Maldives
        "MVR" => "Rufiyaa",
        // Malawi
        "MWK" => "Malawi Kwacha",
        // Mexico
        "MXN" => "Mexican Peso",
        // Malaysia
        "MYR" => "Malaysian Ringgit",
        // Mozambique
        "MZN" => "Mozambique Metical",
        // Namibia
        "NAD" => "Namibia Dollar",
        // Nigeria
        "NGN" => "Naira",
        // Nicaragua
        "NIO" => "Cordoba Oro",
        // Netherlands. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "NLG" => "Guilder",
        // Norway, Bouvet Island, Svalbard and Jan Mayen
        "NOK" => "Norwegian Krone",
        // Nepal
        "NPR" => "Nepalese Rupee",
        // New Zealand, Cook Islands, Niue, Pitcairn, Tokelau
        "NZD" => "New Zealand Dollar",
        // Oman (prices normally quoted with 3 decimal places)
        "OMR" => "Rial Omani",
        // Panama
        "PAB" => "Balboa",
        // Peru (formerly Nuevo Sol)
        "PEN" => "Sol",
        // Papua New Guinea
        "PGK" => "Kina",
        // Philippines
        "PHP" => "Philippine Peso",
        // Pakistan (prices normally quoted as integers)
        "PKR" => "Pakistan Rupee",
        // Poland
        "PLN" => "Zloty",
        // Portugal. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "PTE" => "Escudo",
        // Paraguay (prices normally quoted as integers)
        "PYG" => "Guarani",
        // Qatar
        "QAR" => "Qatari Rial",
        // Deprecated, replaced by RON
        "ROL" => "Romanian Old Leu",
        // Romania
        "RON" => "Romanian Leu",
        // Serbia (prices normally quoted as integers)
        "RSD" => "Serbian Dinar",
        // Russian Federation
        "RUB" => "Russian Ruble",
        // DEPRECATED, replaced by RUB
        "RUR" => "Russian Ruble",
        // Rwanda (prices normally quoted as integers)
        "RWF" => "Rwanda Franc",
        // Saudi Arabia
        "SAR" => "Saudi Riyal",
        // Solomon Islands
        "SBD" => "Solomon Islands Dollar",
        // Seychelles
        "SCR" => "Seychelles Rupee",
        // Now replaced by the Sudanese Pound (SDG)
        "SDD" => "Sudanese Dinar",
        // Sudan
        "SDG" => "Sudanese Pound",
        // Sweden
        "SEK" => "Swedish Krona",
        // Singapore
        "SGD" => "Singapore Dollar",
        // Saint Helena
        "SHP" => "Saint Helena Pound",
        // Slovenia. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "SIT" => "Tolar",
        // Slovakia. Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro
        "SKK" => "Slovak Koruna",
        // Sierra Leone (prices normally quoted as integers)
        "SLL" => "Leone",
        // Somalia (prices normally quoted as integers)
        "SOS" => "Somali Shilling",
        // Suriname
        "SRD" => "Surinam Dollar",
        // DEPRECATED, replaced by SRD
        "SRG" => "Suriname Guilder",
        // São Tome and Principe (prices normally quoted as integers)
        "STD" => "Dobra",
        // El Salvador
        "SVC" => "El Salvador Colon",
        // Syrian Arab Republic (prices normally quoted as integers)
        "SYP" => "Syrian Pound",
        // Swaziland
        "SZL" => "Lilangeni",
        // Thailand
        "THB" => "Baht",
        // Tajikistan
        "TJS" => "Somoni",
        // Deprecated, replaced by TMT (prices normally quoted as integers)
        "TMM" => "Turkmenistan Manat",
        // Turkmenistan
        "TMT" => "Turkmenistan New Manat",
        // Tunisia (prices normally quoted with 3 decimal places)
        "TND" => "Tunisian Dinar",
        // Tonga
        "TOP" => "Pa’anga",
        // Deprecated. Timor-Leste now uses the US Dollar
        "TPE" => "Timor Escudo",
        // Deprecated, replaced by TRY (prices normally quoted as integers)
        "TRL" => "Turkish Lira (old)",
        // Turkey, from 1 January 2005
        "TRY" => "Turkish Lira",
        // Trinidad and Tobago
        "TTD" => "Trinidad and Tobago Dollar",
        // Taiwan (Province of China)
        "TWD" => "New Taiwan Dollar",
        // Tanzania (United Republic of) (prices normally quoted as integers)
        "TZS" => "Tanzanian Shilling",
        // Ukraine
        "UAH" => "Hryvnia",
        // Uganda (prices normally quoted as integers)
        "UGX" => "Uganda Shilling",
        /* United States, American Samoa, Bonaire, Sint Eustatius and Saba, British Indian Ocean Territory, Ecuador, El Salvador, Guam,
					Haiti, Marshall Is, Micronesia (Federated States of), Northern Mariana Is, Palau, Panama, Puerto Rico, Timor-Leste, Turks
					and Caicos Is, US Minor Outlying Is, Virgin Is (British), Virgin Is (US) */
        "USD" => "US Dollar",
        // Uruguay
        "UYU" => "Peso Uruguayo",
        // Uzbekistan (prices normally quoted as integers)
        "UZS" => "Uzbekistan Sum",
        // Deprecated, replaced by VEF
        "VEB" => "Bolivar",
        // Venezuela (formerly Bolívar fuerte)
        "VEF" => "Bolívar",
        // Viet Nam (prices normally quoted as integers)
        "VND" => "Dong",
        // Vanuatu (prices normally quoted as integers)
        "VUV" => "Vatu",
        // Samoa
        "WST" => "Tala",
        // Cameroon, Central African Republic, Chad, Congo, Equatorial Guinea, Gabon (prices normally quoted as integers)
        "XAF" => "CFA Franc BEAC",
        // Anguilla, Antigua and Barbuda, Dominica, Grenada, Montserrat, Saint Kitts and Nevis, Saint Lucia, Saint Vincent and the Grenadines
        "XCD" => "East Caribbean Dollar",
        // Benin, Burkina Faso, Côte D’Ivoire, Guinea-Bissau, Mali, Niger, Senegal, Togo (prices normally quoted as integers)
        "XOF" => "CFA Franc BCEAO",
        // French Polynesia, New Caledonia, Wallis and Futuna (prices normally quoted as integers)
        "XPF" => "CFP Franc",
        // Yemen (prices normally quoted as integers)
        "YER" => "Yemeni Rial",
        // DEPRECATED, replaced by CSD
        "YUM" => "Yugoslavian Dinar",
        // South Africa, Namibia, Lesotho
        "ZAR" => "Rand",
        // Zambia. Deprecated, replaced with ZMW (prices normally quoted as integers)
        "ZMK" => "Kwacha",
        // Zambia
        "ZMW" => "Zambian Kwacha",
        // Deprecated, replaced with ZWL (prices normally quoted as integers)
        "ZWD" => "Zimbabwe Dollar",
        // Zimbabwe
        "ZWL" => "Zimbabwe Dollar",
    ];
}