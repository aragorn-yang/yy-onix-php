<?php

namespace AragornYang\Onix\CodeLists;

class CodeList153TextType extends CodeList
{
    public const KEY = 'TextType';

    protected const MAPPING = [
        /* To be used only in circumstances where the parties to an exchange have agreed to include text which (a) is not for general
					distribution, and (b) cannot be coded elsewhere. If more than one type of text is sent, it must be identified by tagging within
					the text itself */
        "01" => "Sender-defined text",
        // Limited to a maximum of 350 characters
        "02" => "Short description/annotation",
        // Length unrestricted
        "03" => "Description",
        // Used for a table of contents sent as a single text field, which may or may not carry structure expressed as XHTML
        "04" => "Table of contents",
        // Descriptive blurb taken from the back cover and/or flaps
        "05" => "Flap / cover copy",
        /* A quote taken from a review of the product or of the work in question where there is no need to take account of different
					editions */
        "06" => "Review quote",
        // A quote taken from a review of a previous edition of the work
        "07" => "Review quote: previous edition",
        // A quote taken from a review of a previous work by the same author(s) or in the same series
        "08" => "Review quote: previous work",
        // A quote usually provided by a celebrity or another author to promote a new book, not from a review
        "09" => "Endorsement",
        // A promotional phrase which is intended to headline a description of the product
        "10" => "Promotional headline",
        /* Text describing a feature of a product to which the publisher wishes to draw attention for promotional purposes. Each separate
					feature should be described by a separate repeat, so that formatting can be applied at the discretion of the receiver of the
					ONIX record, or multiple features can be described using appropriate XHTML markup */
        "11" => "Feature",
        // A note referring to all contributors to a product – NOT linked to a single contributor
        "12" => "Biographical note",
        /* A statement included by a publisher in fulfillment of contractual obligations, such as a disclaimer, sponsor statement, or
					legal notice of any sort. Note that the inclusion of such a notice cannot and does not imply that a user of the ONIX record
					is obliged to reproduce it */
        "13" => "Publisher’s notice",
        // A short excerpt from the work
        "14" => "Excerpt",
        // Used for an index sent as a single text field, which may be structured using XHTML
        "15" => "Index",
        // (of which the product is a part.) Limited to a maximum of 350 characters
        "16" => "Short description/annotation for collection",
        // (of which the product is a part.) Length unrestricted
        "17" => "Description for collection",
        // As code 11 but used for a new feature of this edition or version
        "18" => "New feature",
        // 
        "19" => "Version history",
        /* Short summary statement of open access status and any related conditions (eg ‘Open access – no commercial use’), primarily
					for marketing purposes. Should always be accompanied by a link to the complete license (see <EpubLicense> or code 99 in List
					158) */
        "20" => "Open access statement",
        /* Short summary statement that the product is available only in digital formats (eg ‘Digital exclusive’). If a non-digital version
					is planned, <ContentDate> should be used to specify the date when exclusivity will end (use content date role code 15). If
					a non-digital version is available, the statement should not be included */
        "21" => "Digital exclusivity statement",
        /* For example a recommendation or approval provided by a ministry of education or other official body. Use <Text> to provide
					details and ideally use <TextSourceCorporate> to name the approver */
        "22" => "Official recommendation",
        // Short description in format specified by Japanese Book Publishers Association
        "23" => "JBPA description",
    ];
}