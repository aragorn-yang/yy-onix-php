<?php

namespace AragornYang\Onix\CodeLists;

class CodeList33OtherTextType extends CodeList
{
    public const KEY = 'OtherTextType';

    protected const MAPPING = [
        // 
        "01" => "Main description",
        // Limited to a maximum of 350 characters
        "02" => "Short description/annotation",
        // 
        "03" => "Long description",
        /* Used for a table of contents sent as a single text field, which may or may not carry structure expressed through HTML etc.
					Alternatively, a fully structured table of contents may be sent by using the <ContentItem> composite */
        "04" => "Table of contents",
        // A review quote that is restricted to a maximum length agreed between the sender and receiver of an ONIX file
        "05" => "Review quote, restricted length",
        // A review quote taken from a review of a previous edition of the work
        "06" => "Quote from review of previous edition",
        // Full text of a review of the product
        "07" => "Review text",
        // A quote from a review of the product
        "08" => "Review quote",
        // A promotional phrase which is intended to headline a description of the product
        "09" => "Promotional ‘headline’",
        // A quote from a review of a previous work by the same author(s) or in the same series
        "10" => "Previous review quote",
        // May be part of Reading Group Guide material: for other commentary, see code 42
        "11" => "Author comments",
        // 
        "12" => "Description for reader",
        // A note referring to all contributors to a product – NOT linked to a single contributor
        "13" => "Biographical note",
        // For linking to a complete Reading Group Guide, see code 41
        "14" => "Description for Reading Group Guide",
        // Each instance must carry a single question: for linking to a complete Reading Group Guide, see code 41
        "15" => "Discussion question for Reading Group Guide",
        /* Free text listing of other titles with which the product is in competition: although this text might not appear in ‘public’
					ONIX records, it could be required where ONIX Is used as a communication format within a group of publishing and distribution
					companies */
        "16" => "Competing titles",
        // 
        "17" => "Flap copy",
        // 
        "18" => "Back cover copy",
        /* Text describing a feature of a product to which the publisher wishes to draw attention for promotional purposes. Each separate
					feature should be described by a separate repeat, so that formatting can be applied at the discretion of the receiver of the
					ONIX record */
        "19" => "Feature",
        // As code 19, but used for a feature which is new in a new edition of the product
        "20" => "New feature",
        /* A statement included by a publisher in fulfillment of its contractual obligations, such as a disclaimer, sponsor statement,
					or legal notice of any sort. Note that the inclusion of such a notice cannot and does not imply that a user of the ONIX record
					is obliged to reproduce it */
        "21" => "Publisher’s notice",
        // 
        "22" => "Index",
        // 
        "23" => "Excerpt from book",
        // 
        "24" => "First chapter",
        // 
        "25" => "Description for sales people",
        // 
        "26" => "Description for press or other media",
        // 
        "27" => "Description for subsidiary rights department",
        // 
        "28" => "Description for teachers/educators",
        // A quote usually provided by a celebrity to promote a new book, not from a review
        "30" => "Unpublished endorsement",
        // 
        "31" => "Description for bookstore",
        // 
        "32" => "Description for library",
        // 
        "33" => "Introduction or preface",
        // 
        "34" => "Full text",
        // Promotional text not covered elsewhere
        "35" => "Promotional text",
        // 
        "40" => "Author interview / QandA",
        // Complete guide: see also codes 14 and 15
        "41" => "Reading Group Guide",
        // Other than author comments: see code 11
        "42" => "Commentary / discussion",
        // (of which the product is a part.) Limited to a maximum of 350 characters
        "43" => "Short description for series or set",
        // (of which the product is a part)
        "44" => "Long description for series or set",
        // Link to a schedule in iCalendar format
        "45" => "Contributor event schedule",
        // Link to a license covering permitted usage of the product content
        "46" => "License",
        /* Short summary statement of open access status and any related conditions (eg ‘Open access – no commercial use’), primarily
					for marketing purposes. Should always be accompanied by a link to the complete license (see code 46) */
        "47" => "Open access statement",
        /* Short summary statement that the product is available only in digital formats (eg ‘Digital exclusive’). If a non-digital version
					is planned, an <EndDate> should be used to specify the date when exclusivity will end. If a non-digital version is available,
					the statement should not be included */
        "48" => "Digital exclusivity statement",
        /* For example a recommendation or approval provided by a ministry of education or other official body. Use <Text> to provide
					details and <TextSourceCorporate> to name the approver */
        "49" => "Official recommendation",
        /* A master brand name or title, where the use of the brand spans multiple sets, series and product forms, and possibly multiple
					imprints and publishers. Used only for branded media properties carrying, for example, a children’s character brand. (This
					functionality is provided as a workaround in ONIX 2.1 only. ONIX 3.0 has specific provision for master brands as title elements */
        "98" => "Master brand name",
        /* A single ISO 3166-1 country code from List 91 designating the country of final manufacture of the product. (This functionality
					is provided as a workaround in ONIX 2.1. ONIX 3.0 has specific provision for country of manufacture as a separate element) */
        "99" => "Country of final manufacture",
    ];
}