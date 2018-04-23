<?php

namespace AragornYang\Onix\CodeLists;

class CodeList196EPublicationAccessibilityDetails extends CodeList
{
    public const KEY = 'EPublicationAccessibilityDetails';

    protected const MAPPING = [
        // 
        "01" => "LIA Compliance Scheme",
        /* No accessibility features offered by the reading system, device or reading software (including but not limited to choice of
					text size or typeface, choice of text or background color, text-to-speech) are disabled, overridden or otherwise unusable
					with the product EXCEPT – in ONIX 3 messages only – those specifically noted as subject to restriction or prohibition in <EpubUsageConstraint>.
					Note that provision of any significant part of the textual content as images (ie as pictures of text, rather than as text)
					inevitably prevents use of these accessibility options */
        "10" => "No reading system accessibility options disabled (except)",
        /* Table of contents allows direct (eg hyperlinked) access to all levels of text organization above individual paragraphs (eg
					to all sections and subsections) and to all tables, figures, illustrations etc. Non-textual items such as illustrations, tables,
					audio or video content may be directly accessible from the Table of contents, or from a similar List of illustrations, List
					of tables, etc */
        "11" => "Table of contents navigation",
        // Index provides direct (eg hyperlinked) access to uses of the index terms in the document body
        "12" => "Index navigation",
        /* All or substantially all textual matter is arranged in a single logical reading order (including text that is visually presented
					as separate from the main text flow, eg in boxouts, captions, tables, footnotes, endnotes, citations, etc). Non-textual content
					is also linked from within this logical reading order. (Purely decorative non-text content can be ignored) */
        "13" => "Reading order",
        /* All or substantially all non-text content has short alternative descriptions, usually provided via alt attributes. Note this
					applies to normal images (eg photographs, charts and diagrams) and also to any embedded audio, video etc. Audio and video
					content should include alternative descriptions suitable for hearing-impaired as well as for visually-impaired readers. (Purely
					decorative non-text content can be ignored, but the accessibility of resources delivered via a network connection rather than
					as part of the e-publication package must be included) */
        "14" => "Short alternative descriptions",
        /* All or substantially all non-text content has full alternative descriptions. Note this applies to normal images (eg photographs,
					charts and diagrams) and also to any embedded audio, video etc. Audio and video content should include full alternative descriptions
					(eg audio-described video) and subtitles or closed captions suitable for hearing-impaired as well as for visually-impaired
					readers. (Purely decorative non-text content can be ignored, but the accessibility of resources delivered via a network connection
					rather than as part of the e-publication package must be included) */
        "15" => "Full alternative descriptions",
        /* Where data visualisations are provided (eg graphs and charts), the underlying data is also available in non-graphical (usually
					tabular, textual) form */
        "16" => "Visualised data also available as non-graphical data",
        /* Mathematical content such as equations is usable with assistive technology, eg through use of MathML. Semantic MathML is preferred
					but Presentational MathML is acceptable */
        "17" => "Accessible math content",
        // Chemistry content such as chemical formulae is usable with assistive technology, eg through use of ChemML
        "18" => "Accessible chem content",
        // For a reflowable e-publication, contains references to the page numbering of an equivalent printed product
        "19" => "Print-equivalent page numbering",
        /* Text-synchronised pre-recorded audio narration (natural or synthesised voice) is included for substantially all textual matter,
					including all alternative descriptions */
        "20" => "Synchronised pre-recorded audio",
        // Text-to-speech has been optimised through provision of PLS lexicons, SSML or CSS Speech synthesis hints
        "21" => "Text-to-speech hinting provided",
        /* The language of the text has been specified (eg via the HTML or XML lang attribute) to optimise text-to-speech (and other
					alternative renderings), both at whole document level and, where appropriate, for individual words, phrases or passages in
					a different language */
        "22" => "Language tagging provided",
        /* Specialised font, character and line spacing, justification and paragraph spacing, colouring and other options provided specifically
					to improve readability for dyslexic readers. Details, including the name of the font, should be listed in <ProductFormFeatureDescription> */
        "24" => "Dyslexia readability",
        /* <ProductFormFeatureDescription> carries the URL of a web page giving further detailed description of the accessibility features,
					compatibility, testing etc. The web page should be maintained by an independent compliance scheme or testing organization */
        "94" => "Compliance web page for detailed accessibility information",
        /* <ProductFormFeatureDescription> carries the URL of a web page giving further detailed description of the accessibility features,
					compatibility, testing etc. The web page should be provided by a trusted intermediary or third party nominated by the publisher */
        "95" => "Trusted intermediary’s web page for detailed accessibility information",
        /* <ProductFormFeatureDescription> carries the URL of a web page giving further detailed description of the accessibility features,
					compatibility, testing etc. The web page should be provided by the publisher */
        "96" => "Publisher’s web page for detailed accessibility information",
        /* <ProductFormFeatureDescription> carries a short description of compatibility testing carried out for this product, including
					detailed compatibility with various assistive technology such as third-party screen-reading software */
        "97" => "Compatibility tested",
        /* <ProductFormFeatureDescription> carries the e-mail address for a contact at a ‘trusted intermediary’, to whom detailed questions
					about accessibility for this product may be directed */
        "98" => "Trusted Intermediary contact",
        /* <ProductFormFeatureDescription> carries the e-mail address for a contact at the publisher to whom detailed questions about
					accessibility of this product may be directed */
        "99" => "Publisher contact for further accessibility information",
    ];
}