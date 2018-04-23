<?php

namespace AragornYang\Onix\CodeLists;

class CodeList34TextFormat extends CodeList
{
    public const KEY = 'TextFormat';

    protected const MAPPING = [
        // DEPRECATED: use code 06 or 07 as appropriate
        "00" => "ASCII text",
        // 
        "01" => "SGML",
        // Other than XHTML
        "02" => "HTML",
        // Other than XHTML
        "03" => "XML",
        // DEPRECATED: was formerly assigned both to PDF and to XHTML
        "04" => "PDF",
        // 
        "05" => "XHTML",
        /* Default: text containing no tags of any kind, except for the tags &amp; and &lt; that XML insists must be used to represent
					ampersand and less-than characters in text, and in the encoding declared at the head of the message or in the XML default
					(UTF-8 or UTF-16) if there is no explicit declaration */
        "06" => "Default text format",
        /* Plain text containing no tags of any kind, except for the tags &amp; and &lt; that XML insists must be used to represent ampersand
					and less-than characters in text, and with the character set limited to the ASCII range, i.e. valid UTF-8 characters whose
					character number lies between 32 (space) and 126 (tilde) */
        "07" => "Basic ASCII text",
        // Replaces 04 for the <TextFormat> element, but cannot of course be used as a textformat attribute
        "08" => "PDF",
        // 
        "09" => "Microsoft rich text format (RTF)",
        // 
        "10" => "Microsoft Word binary format (DOC)",
        // Office Open XML file format / OOXML / DOCX
        "11" => "ECMA 376 WordprocessingML",
        // ISO Open Document Format
        "12" => "ISO 26300 ODF",
        // 
        "13" => "Corel Wordperfect binary format (DOC)",
        /* The Open Publication Structure / OPS Container Format standard of the International Digital Publishing Forum (IDPF) [File
					extension .epub] */
        "14" => "EPUB",
        // XML Paper Specification
        "15" => "XPS",
    ];
}