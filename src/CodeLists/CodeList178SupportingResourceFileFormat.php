<?php

namespace AragornYang\Onix\CodeLists;

class CodeList178SupportingResourceFileFormat extends CodeList
{
    public const KEY = 'SupportingResourceFileFormat';

    protected const MAPPING = [
        // MPEG 1/2 Audio Layer III file
        "A103" => "MP3",
        // Waveform Audio file
        "A104" => "WAV",
        // Proprietary RealNetworks format
        "A105" => "Real Audio",
        // Windows Media Audio format
        "A106" => "WMA",
        // Advanced Audio Coding format
        "A107" => "AAC",
        // Vorbis audio format in the Ogg container
        "A108" => "Ogg/Vorbis",
        // Audio Interchange File format
        "A111" => "AIFF",
        // Proprietary RealNetworks format. Includes Real Video packaged within a .rm RealMedia container
        "D101" => "Real Video",
        // Quicktime container format (.mov)
        "D102" => "Quicktime",
        // Audio Video Interleave format
        "D103" => "AVI",
        // Windows Media Video format
        "D104" => "WMV",
        // MPEG-4 container format (.mp4, .m4a)
        "D105" => "MPEG-4",
        // Flash Video (.flv, .f4v)
        "D106" => "FLV",
        // ShockWave (.swf)
        "D107" => "SWF",
        // 3GPP container format (.3gp, .3g2)
        "D108" => "3GP",
        // WebM container format (includes .mkv)
        "D109" => "WebM",
        // Portable Document File format
        "D401" => "PDF",
        // Graphic Interchange File format
        "D501" => "GIF",
        // Joint Photographic Experts Group format
        "D502" => "JPEG",
        // Portable Network Graphics format
        "D503" => "PNG",
        // Tagged Image File format
        "D504" => "TIFF",
        /* The Open Publication Structure / OPS Container Format standard of the International Digital Publishing Forum (IDPF) [File
					extension .epub] */
        "E101" => "EPUB",
        // HyperText Mark-up Language [File extension .html, .htm]
        "E105" => "HTML",
        // Portable Document Format (ISO 32000-1:2008) [File extension .pdf]
        "E107" => "PDF",
        // Plain text (either ASCII or UTF-8/16 Unicode)
        "E112" => "TXT",
        // Extensible Hypertext Markup Language [File extension .xhtml, .xht, .xml, .html, .htm]
        "E113" => "XHTML",
        // XML Paper Specification
        "E115" => "XPS",
        // A format proprietary to Amazon for use with its Kindle reading devices or software readers [File extensions .azw, .mobi, .prc]
        "E116" => "Amazon Kindle",
        // Founder Apabi’s proprietary basic e-book format
        "E139" => "CEB",
        // Founder Apabi’s proprietary XML e-book format
        "E140" => "CEBX",
    ];
}