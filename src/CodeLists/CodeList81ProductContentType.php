<?php

namespace AragornYang\Onix\CodeLists;

class CodeList81ProductContentType extends CodeList
{
    public const KEY = 'ProductContentType';

    protected const MAPPING = [
        /* Readable text of the main work: this value is required, together with applicable <ProductForm> and <ProductFormDetail> values,
					to designate an e-book or other digital product whose primary content is eye-readable text */
        "10" => "Text (eye-readable)",
        /* E-publication is enhanced with a significant number of actionable cross-references, hyperlinked notes and annotations, or
					with other links between largely textual elements (eg quiz/test questions, ‘choose your own ending’ etc) */
        "15" => "Extensive links between internal content",
        // E-publication is enhanced with a significant number of actionable (clickable) web links
        "14" => "Extensive links to external content",
        /* E-publication is enhanced with additional textual content such as interview, feature article, essay, bibliography, quiz/test,
					other background material or text that is not included in a primary or ‘unenhanced’ version */
        "16" => "Additional eye-readable text not part of main work",
        // eg Teaser chapter
        "17" => "Promotional text for other book product",
        // 
        "11" => "Musical notation",
        // Use only when no more detailed specification is provided
        "07" => "Still images / graphics",
        // Whether in a plate section / insert, or not
        "18" => "Photographs",
        // Including other ‘mechanical’ (ie non-photographic) illustrations
        "19" => "Figures, diagrams, charts, graphs",
        /* E-publication is enhanced with additional images or graphical content such as supplementary photographs that are not included
					in a primary or ‘unenhanced’ version */
        "20" => "Additional images / graphics not part of main work",
        // 
        "12" => "Maps and/or other cartographic content",
        // Audio recording of a reading of a book or other text
        "01" => "Audiobook",
        // Audio recording of a drama or other spoken word performance
        "02" => "Performance – spoken word",
        // eg an interview, not a ‘reading’ or ‘performance’)
        "13" => "Other speech content",
        // Audio recording of a music performance, including musical drama and opera
        "03" => "Music recording",
        // Audio recording of other sound, eg birdsong
        "04" => "Other audio",
        // Audio recording of a reading, performance or dramatization of part of the work
        "21" => "Partial performance – spoken word",
        /* Product is enhanced with audio recording of full or partial reading, performance, dramatization, interview, background documentary
					or other audio content not included in the primary or ‘unenhanced’ version */
        "22" => "Additional audio content not part of main work",
        // eg Reading of teaser chapter
        "23" => "Promotional audio for other book product",
        // Includes Film, video, animation etc. Use only when no more detailed specification is provided. Formerly ‘Moving images’
        "06" => "Video",
        // 
        "26" => "Video recording of a reading",
        // Video recording of a drama or other performance, including musical performance
        "27" => "Performance – visual",
        // eg animated diagrams, charts, graphs or other illustrations
        "24" => "Animated / interactive illustrations",
        // eg cartoon, animatic or CGI animation
        "25" => "Narrative animation",
        // Other video content eg interview, not a reading or performance
        "28" => "Other video",
        // Video recording of a reading, performance or dramatization of part of the work
        "29" => "Partial performance – video",
        /* E-publication is enhanced with video recording of full or partial reading, performance, dramatization, interview, background
					documentary or other content not included in the primary or ‘unenhanced’ version */
        "30" => "Additional video content not part of main work",
        // eg Book trailer
        "31" => "Promotional video for other book product",
        // No multi-user functionality. Formerly just ‘Game’
        "05" => "Game / Puzzle",
        // Includes some degree of multi-user functionality
        "32" => "Contest",
        // Largely ‘content free’
        "08" => "Software",
        // Data files
        "09" => "Data",
        // 
        "33" => "Data set plus software",
        // Intended to be filled in by the reader
        "34" => "Blank pages",
        // Use only where type of advertising content is not stated
        "35" => "Advertising content",
        // ‘Back ads’ – promotional pages for other books (that do not include sample content, cf codes 17, 23)
        "37" => "Advertising – first party",
        // Eg to obtain discounts on other products
        "36" => "Advertising – coupons",
        // 
        "38" => "Advertising – third party display",
        // 
        "39" => "Advertising – third party textual",
    ];
}