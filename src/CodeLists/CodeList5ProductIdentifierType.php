<?php

namespace AragornYang\Onix\CodeLists;

class CodeList5ProductIdentifierType extends CodeList
{
    public const KEY = 'ProductIdentifierType';

    protected const MAPPING = [
        // For example, a publisher’s or wholesaler’s product number. Note that <IDTypeName> is required with proprietary identifiers
        "01" => "Proprietary",
        /* International Standard Book Number, pre-2007, unhyphenated (10 characters) – now DEPRECATED in ONIX for Books, except where
					providing historical information for compatibility with legacy systems. It should only be used in relation to products published
					before 2007 – when ISBN-13 superseded it – and should never be used as the ONLY identifier (it should always be accompanied
					by the correct GTIN-13 / ISBN-13) */
        "02" => "ISBN-10",
        // GS1 Global Trade Item Number, formerly known as EAN article number (13 digits)
        "03" => "GTIN-13",
        // UPC product number (12 digits)
        "04" => "UPC",
        /* International Standard Music Number (M plus nine digits). Pre-2008 – now DEPRECATED in ONIX for Books, except where providing
					historical information for compatibility with legacy systems. It should only be used in relation to products published before
					2008 – when ISMN-13 superseded it – and should never be used as the ONLY identifier (it should always be accompanied by the
					correct ISMN-13) */
        "05" => "ISMN-10",
        // Digital Object Identifier (variable length and character set)
        "06" => "DOI",
        // Library of Congress Control Number (12 characters, alphanumeric)
        "13" => "LCCN",
        // GS1 Global Trade Item Number (14 digits)
        "14" => "GTIN-14",
        // International Standard Book Number, from 2007, unhyphenated (13 digits starting 978 or 9791–9799)
        "15" => "ISBN-13",
        // The number assigned to a publication as part of a national legal deposit process
        "17" => "Legal deposit number",
        /* Uniform Resource Name: note that in trade applications an ISBN must be sent as a GTIN-13 and, where required, as an ISBN-13
					– it should not be sent as a URN */
        "22" => "URN",
        // A unique number assigned to a bibliographic item by OCLC
        "23" => "OCLC number",
        /* An ISBN-13 assigned by a co-publisher. The ‘main’ ISBN sent with ID type code 03 and/or 15 should always be the ISBN that
					is used for ordering from the supplier identified in Supply Detail. However, ISBN rules allow a co-published title to carry
					more than one ISBN. The co-publisher should be identified in an instance of the <Publisher> composite, with the applicable
					<PublishingRole> code */
        "24" => "Co-publisher’s ISBN-13",
        // International Standard Music Number, from 2008 (13-digit number starting 9790)
        "25" => "ISMN-13",
        /* Actionable ISBN, in fact a special DOI incorporating the ISBN-13 within the DOI syntax. Begins ‘10.978.’ or ‘10.979.’ and
					includes a / character between the registrant element (publisher prefix) and publication element of the ISBN, eg 10.978.000/1234567.
					Note the ISBN-A should always be accompanied by the ISBN itself, using codes 03 and/or 15 */
        "26" => "ISBN-A",
        // E-publication identifier controlled by JPOIID’s Committee for Research and Management of Electronic Publishing Codes
        "27" => "JP e-code",
        // Unique number assigned by the Chinese Online Library Cataloging Center (see http://olcc.nlc.gov.cn)
        "28" => "OLCC number",
        /* Japanese magazine identifier, similar in scope to ISSN but identifying a specific issue of a serial publication. Five digits
					to identify the periodical, plus a hyphen and two digits to identify the issue */
        "29" => "JP Magazine ID",
        /* Used only with comic books and other products which use the UPC extension to identify individual issues or products. Do not
					use where the UPC12 itself identifies the specific product, irrespective of any 5-digit extension – use code 04 instead */
        "30" => "UPC12+5",
        // Numéro de la notice bibliographique BNF
        "31" => "BNF Control number",
    ];
}