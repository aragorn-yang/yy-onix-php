<?php

namespace AragornYang\Onix\CodeLists;

class CodeList158ResourceContentType extends CodeList
{
    public const KEY = 'ResourceContentType';

    protected const MAPPING = [
        // 2D
        "01" => "Front cover",
        // 2D
        "02" => "Back cover",
        // Not limited to front or back, including 3D perspective
        "03" => "Cover / pack",
        // Photograph or portrait of contributor(s)
        "04" => "Contributor picture",
        // 
        "05" => "Series image / artwork",
        // 
        "06" => "Series logo",
        // 
        "07" => "Product image / artwork",
        // 
        "08" => "Product logo",
        // 
        "09" => "Publisher logo",
        // 
        "10" => "Imprint logo",
        // 
        "11" => "Contributor interview",
        // Contributor presentation and/or commentary
        "12" => "Contributor presentation",
        // 
        "13" => "Contributor reading",
        // Link to a schedule in iCalendar format
        "14" => "Contributor event schedule",
        // For example: sample chapter text, page images, screenshots
        "15" => "Sample content",
        // A ‘look inside’ feature presented as a small embeddable application
        "16" => "Widget",
        /* Review text held in a separate downloadable file, not in the ONIX record. Equivalent of code 06 in List 153. Use the <TextContent>
					composite for review quotes carried in the ONIX record. Use the <CitedContent> composite for a third-party review which is
					referenced from the ONIX record. Use <SupportingResource> for review text offered as a separate file resource for reproduction
					as part of promotional material for the product */
        "17" => "Review",
        // 
        "18" => "Other commentary / discussion",
        // 
        "19" => "Reading group guide",
        // Incuding associated teacher / instructor resources
        "20" => "Teacher’s guide",
        // Feature article provided by publisher
        "21" => "Feature article",
        // Fictional character ‘interview’
        "22" => "Character ‘interview’",
        // 
        "23" => "Wallpaper / screensaver",
        // 
        "24" => "Press release",
        /* A table of contents held in a separate downloadable file, not in the ONIX record. Equivalent of code 04 in List 153. Use the
					<TextContent> composite for a table of contents carried in the ONIX record. Use <Supporting Resource> for text offered as
					a separate file resource */
        "25" => "Table of contents",
        // A promotional video (or audio), similar to a movie trailer (sometimes referred to as a ‘book trailer’)
        "26" => "Trailer",
        /* Intended ONLY for transitional use, where ONIX 2.1 records referencing existing thumbnail assets of unknown pixel size are
					being re-expressed in ONIX 3.0. Use code 01 for all new cover assets, and where the pixel size of older assets is known */
        "27" => "Cover thumbnail",
        // The full content of the product (or the product itself), supplied for example to support full-text search or indexing
        "28" => "Full content",
        // Includes cover, back cover, spine and – where appropriate – any flaps
        "29" => "Full cover",
        // 
        "30" => "Master brand logo",
        /* Descriptive text in a separate downloadable file, not in the ONIX record. Equivalent of code 03 in List 153. Use the <TextContent>
					composite for descriptions carried in the ONIX record. Use <Supporting Resource> for text offered as a separate file resource
					for reproduction as part of promotional material for the product */
        "31" => "Description",
        /* Index text held in a separate downloadable file, not in the ONIX record. Equivalent of code 15 in List 153. Use the <TextContent>
					composite for index text carried in the ONIX record. Use <Supporting Resource> for an index offered as a separate file resource */
        "32" => "Index",
        // Including associated student / learner resources
        "33" => "Student’s guide",
        // For example a PDF or other digital representation of a publisher’s ‘new titles’ or range catalogue
        "34" => "Publisher’s catalogue",
        // For example a banner ad for the product. Pixel dimensions should typically be included in <ResourceVersionFeature>
        "35" => "Online advertisement panel",
        // German ‘Búhnenbild’
        "36" => "Online advertisement page",
        // For example, posters, logos, banners, advertising templates for use in connection with a promotional event
        "37" => "Promotional event material",
        // Availability of a digital review or digital proof copy, may be limited to authorised users or account holders
        "38" => "Digital review copy",
        // For example, video showing how to use the product
        "39" => "Instructional material",
        /* Link to a license covering permitted usage of the product content. Deprecated in favor of <EpubLicense>. This was a temporary
					workaround in ONIX 3.0, and use of <EpubLicense> is strongly preferred */
        "99" => "License",
    ];
}