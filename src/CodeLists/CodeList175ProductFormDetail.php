<?php

namespace AragornYang\Onix\CodeLists;

class CodeList175ProductFormDetail extends CodeList
{
    public const KEY = 'ProductFormDetail';

    protected const MAPPING = [
        // CD ‘red book’ format
        "A101" => "CD standard audio format",
        // 
        "A102" => "SACD super audio format",
        // MPEG-1/2 Audio Layer III file
        "A103" => "MP3 format",
        // 
        "A104" => "WAV format",
        // 
        "A105" => "Real Audio format",
        // Windows Media Audio format
        "A106" => "WMA",
        // Advanced Audio Coding format
        "A107" => "AAC",
        // Vorbis audio format in the Ogg container
        "A108" => "Ogg/Vorbis",
        // Audio format proprietary to Audible.com
        "A109" => "Audible",
        // Free lossless audio codec
        "A110" => "FLAC",
        // Audio Interchangeable File Format
        "A111" => "AIFF",
        // Apple Lossless Audio Codec
        "A112" => "ALAC",
        // Deprecated, as does not meet DAISY 2 standard. Use conventional audiobook codes instead
        "A201" => "DAISY 2: full audio with title only (no navigation)",
        // 
        "A202" => "DAISY 2: full audio with navigation (no text)",
        // 
        "A203" => "DAISY 2: full audio with navigation and partial text",
        // 
        "A204" => "DAISY 2: full audio with navigation and full text",
        // Reading systems may provide full audio via text-to-speech
        "A205" => "DAISY 2: full text with navigation and partial audio",
        // Reading systems may provide full audio via text-to-speech
        "A206" => "DAISY 2: full text with navigation and no audio",
        // Deprecated, as does not meet DAISY 3 standard. Use conventional audiobook codes instead
        "A207" => "DAISY 3: full audio with title only (no navigation)",
        // 
        "A208" => "DAISY 3: full audio with navigation (no text)",
        // 
        "A209" => "DAISY 3: full audio with navigation and partial text",
        // 
        "A210" => "DAISY 3: full audio with navigation and full text",
        // Reading systems may provide full audio via text-to-speech
        "A211" => "DAISY 3: full text with navigation and partial audio",
        // Reading systems may provide full audio via text-to-speech
        "A212" => "DAISY 3: full text with navigation and no audio",
        // 
        "A301" => "Standalone audio",
        /* Audio intended exclusively for use alongside a printed copy of the book. Most often a children’s product. Normally contains
					instructions such as ‘turn the page now’ and other references to the printed item, and is usually sold packaged together with
					a printed copy */
        "A302" => "Readalong audio",
        /* Audio intended for musical accompaniment, eg ‘Music minus one’, etc, often used for music learning. Includes singalong backing
					audio for musical learning or for Karaoke-style entertainment */
        "A303" => "Playalong audio",
        // Audio intended for language learning, which includes speech plus gaps intended to be filled by the listener
        "A304" => "Speakalong audio",
        /* Audio synchronised to text within an e-publication, for example an EPUB3 with audio overlay. Synchronisation at least at paragraph
					level, and covering the full content */
        "A305" => "Synchronised audio",
        // Includes 'stereo' where channels are identical
        "A410" => "Mono",
        // 
        "A420" => "Stereo",
        // Stereo plus low-frequency channel
        "A421" => "Stereo 2.1",
        // Five-channel audio (including low-frequency channel)
        "A441" => "Surround 4.1",
        // Six-channel audio (including low-frequency channel)
        "A451" => "Surround 5.1",
        /* In North America, a category of paperback characterized partly by page size (typically 4¼ x 7 1/8 inches) and partly by target
					market and terms of trade. Use with Product Form code BC */
        "B101" => "Mass market (rack) paperback",
        /* In North America, a category of paperback characterized partly by page size and partly by target market and terms of trade.
					AKA ‘quality paperback’, and including textbooks. Most paperback books sold in North America except ‘mass-market’ (B101) and
					‘tall rack’ (B107) are correctly described with this code. Use with Product Form code BC */
        "B102" => "Trade paperback (US)",
        /* In North America, a category of paperback characterized by page size and generally used for children’s books; use with Product
					Form code BC. Note: was wrongly shown as B102 (duplicate entry) in Issue 3 */
        "B103" => "Digest format paperback",
        // In UK, a category of paperback characterized by page size (normally 178 x 111 mm approx); use with Product Form code BC
        "B104" => "A-format paperback",
        // In UK, a category of paperback characterized by page size (normally 198 x 129 mm approx); use with Product Form code BC
        "B105" => "B-format paperback",
        /* In UK, a category of paperback characterized partly by size (usually in traditional hardback dimensions), and often used for
					paperback originals; use with Product Form code BC (replaces ‘C-format’ from former List 8) */
        "B106" => "Trade paperback (UK)",
        /* In North America, a category of paperback characterised partly by page size and partly by target market and terms of trade;
					use with Product Form code BC */
        "B107" => "Tall rack paperback (US)",
        // 210x148mm
        "B108" => "A5 size Tankobon",
        // Japanese B-series size, 257x182mm
        "B109" => "JIS B5 size Tankobon",
        // Japanese B-series size, 182x128mm
        "B110" => "JIS B6 size Tankobon",
        // 148x105mm
        "B111" => "A6 size Bunko",
        // Japanese format, 182x103mm or 173x105mm
        "B112" => "B40-dori Shinsho",
        // A Swedish, Norwegian, French paperback format, of no particular fixed size. Use with Product Form Code BC
        "B113" => "Pocket (Sweden, Norway, France)",
        // A Swedish paperback format, use with Product Form Code BC
        "B114" => "Storpocket (Sweden)",
        // A Swedish hardback format, use with Product Form Code BB
        "B115" => "Kartonnage (Sweden)",
        // A Swedish softback format, use with Product Form Code BC
        "B116" => "Flexband (Sweden)",
        // A softback book in the format of a magazine, usually sold like a book. Use with Product Form code BC
        "B117" => "Mook / Bookazine",
        /* Also called ‘Flipback’. A softback book in a specially compact proprietary format with pages printed in landscape on very
					thin paper and bound along the long (top) edge – see www.dwarsligger.com */
        "B118" => "Dwarsligger",
        // Japanese format: 188x127mm
        "B119" => "46 size",
        // Japanese format
        "B120" => "46-Henkei size",
        // 297x210mm
        "B121" => "A4",
        // Japanese format
        "B122" => "A4-Henkei size",
        // Japanese format
        "B123" => "A5-Henkei size",
        // Japanese format
        "B124" => "B5-Henkei size",
        // Japanese format
        "B125" => "B6-Henkei size",
        // 257x210mm
        "B126" => "AB size",
        // Japanese B-series size, 128x91mm
        "B127" => "JIS B7 size",
        // Japanese format: 218x152mm or 227x152mm
        "B128" => "Kiku size",
        // Japanese format
        "B129" => "Kiku-Henkei size",
        // Japanese B-series size, 257x364mm
        "B130" => "JIS B4 size",
        // German paperback format, greater than 205mm high, with flaps. Use with Product form code BC
        "B131" => "Paperback (DE)",
        // 
        "B201" => "Coloring / join-the-dot book",
        // 
        "B202" => "Lift-the-flap book",
        // Note: was wrongly shown as B203 (duplicate entry) in Issue 3
        "B204" => "Miniature book",
        // 
        "B205" => "Moving picture / flicker book",
        // 
        "B206" => "Pop-up book",
        // 
        "B207" => "Scented / ‘smelly’ book",
        // 
        "B208" => "Sound story / ‘noisy’ book",
        // 
        "B209" => "Sticker book",
        // A book whose pages have a variety of textured inserts designed to stimulate tactile exploration: see also B214 and B215
        "B210" => "Touch-and-feel book",
        /* A book which is cut into a distinctive non-rectilinear shape and/or in which holes or shapes have been cut internally. (‘Die-cut’
					is used here as a convenient shorthand, and does not imply strict limitation to a particular production process) */
        "B212" => "Die-cut book",
        /* A book which is also a toy, or which incorporates a toy as an integral part. (Do not, however, use B213 for a multiple-item
					product which includes a book and a toy as separate items) */
        "B213" => "Book-as-toy",
        // A book whose cover has a soft textured finish, typically over board
        "B214" => "Soft-to-touch book",
        // A book with detachable felt pieces and textured pages on which they can be arranged
        "B215" => "Fuzzy-felt book",
        // Children’s picture book: use with applicable Product Form code
        "B221" => "Picture book",
        /* (aka ‘Star’ book). Tax treatment of products may differ from that of products with similar codes such as Book as toy or Pop-up
					book) */
        "B222" => "‘Carousel’ book",
        /* A book with movable card 'tabs' within the pages. Pull a tab to reveal or animate part of a picture (distinct from a ‘lift-the-flap’
					book, where flaps simply reveal hidden pictures, and not a ‘pop-up’ book with 3D paper engineering) */
        "B223" => "Pull-the-tab book",
        // Use with Product Form code BD
        "B301" => "Loose leaf – sheets and binder",
        // Use with Product Form code BD
        "B302" => "Loose leaf – binder only",
        // Use with Product Form code BD
        "B303" => "Loose leaf – sheets only",
        // AKA stitched; for ‘saddle-sewn’, see code B310
        "B304" => "Sewn",
        // Including ‘perfect bound’, ‘glued’
        "B305" => "Unsewn / adhesive bound",
        // Strengthened cloth-over-boards binding intended for libraries: use with Product form code BB
        "B306" => "Library binding",
        // Strengthened binding, not specifically intended for libraries: use with Product form code BB or BC
        "B307" => "Reinforced binding",
        // Must be accompanied by a code specifiying a material, eg ‘half-bound real leather’
        "B308" => "Half bound",
        // Must be accompanied by a code specifiying a material, eg ‘quarter bound real leather’
        "B309" => "Quarter bound",
        // AKA ‘saddle-stitched’ or ‘wire-stitched’
        "B310" => "Saddle-sewn",
        // Round or oval plastic forms in a clamp-like configuration: use with Product Form code BE
        "B311" => "Comb bound",
        // Twin loop metal wire spine: use with Product Form code BE
        "B312" => "Wire-O",
        // Cased over Coiled or Wire-O binding: use with Product Form code BE and Product Form Detail code B312 or B315
        "B313" => "Concealed wire",
        /* Spiral wire bound. Use with product form code BE. The default if a spiral binding type is not stated. Cf. Comb and Wire-O
					binding */
        "B314" => "Coiled wire bound",
        /* Hardcover binding intended for general consumers rather than libraries, use with Product form code BB. The default if a hardcover
					binding detail is not stated. cf. Library binding */
        "B315" => "Trade binding",
        // Cover is attached to the book block along only one edge of the spine, allowing the cover to lay flat
        "B316" => "Swiss binding",
        // Refinement of perfect binding, with notches cut in the spine of the book block prior to glueing, to improve adhesion and durability
        "B317" => "Notched binding",
        // Covers do not use a distinctive stock, but are the same as the body pages
        "B400" => "Self-covered",
        // AKA fabric, linen over boards
        "B401" => "Cloth over boards",
        // 
        "B402" => "Paper over boards",
        // 
        "B403" => "Leather, real",
        // 
        "B404" => "Leather, imitation",
        // 
        "B405" => "Leather, bonded",
        // 
        "B406" => "Vellum",
        // Cloth, not necessarily over boards – cf B401
        "B409" => "Cloth",
        // Spanish ‘simil-tela’
        "B410" => "Imitation cloth",
        // 
        "B411" => "Velvet",
        // AKA ‘flexibound’: use with Product Form code BC
        "B412" => "Flexible plastic/vinyl cover",
        // 
        "B413" => "Plastic-covered",
        // 
        "B414" => "Vinyl-covered",
        // Book, laminating material unspecified: use L101 for ‘whole product laminated’, eg a laminated sheet map or wallchart
        "B415" => "Laminated cover",
        // With card cover (like a typical paperback). As distinct from a self-cover or more elaborate binding
        "B416" => "Card cover",
        // Type unspecified
        "B501" => "With dust jacket",
        // Used to distinguish from B503
        "B502" => "With printed dust jacket",
        // With translucent paper or plastic protective cover
        "B503" => "With translucent dust cover",
        // For paperback with flaps
        "B504" => "With flaps",
        // 
        "B505" => "With thumb index",
        // If the number of markers is significant, it can be stated as free text in <ProductFormDescription>
        "B506" => "With ribbon marker(s)",
        // 
        "B507" => "With zip fastener",
        // 
        "B508" => "With button snap fastener",
        // AKA yapp edge?
        "B509" => "With leather edge lining",
        /* With edge trimming such that the front edge is ragged, not neatly and squarely trimmed: AKA deckle edge, feather edge, uncut
					edge, rough cut */
        "B510" => "Rough front",
        // With one or more gatefold or foldout sections bound in
        "B511" => "Foldout",
        // Pages include extra-wide margin specifically intended for hand-written annotations
        "B512" => "Wide margin",
        // Book with attached loop for fixing to baby stroller, cot, chair etc
        "B513" => "With fastening strap",
        // With one or more pages perforated and intended to be torn out for use
        "B514" => "With perforated pages",
        // Printed on acid-free or alkaline buffered paper conforming with ISO 9706
        "B515" => "Acid-free paper",
        // Printed on acid-free or alkaline bufferred paper with a high cotton content, conforming with ISO 11108
        "B516" => "Archival paper",
        /* A book in which half the content is printed upside-down, to be read the other way round. Also known as a ‘flip-book’, ‘back-to-back’,
					(fr.) ‘tête-bêche’ (usually an omnibus of two works) */
        "B601" => "Turn-around book",
        // Manga with pages and panels in the sequence of the original Japanese, but with Western text
        "B602" => "Unflipped manga format",
        // Text shows syllable breaks
        "B610" => "Syllabification",
        // Single letters only. Was formerly identified as UK Braille Grade 1
        "B701" => "UK Uncontracted Braille",
        // With some letter combinations. Was formerly identified as UK Braille Grade 2
        "B702" => "UK Contracted Braille",
        // For US Braille, prefer codes B704 and B705 as appropriate
        "B703" => "US Braille",
        // 
        "B704" => "US Uncontracted Braille",
        // 
        "B705" => "US Contracted Braille",
        // Moon embossed alphabet, used by some print-impaired readers who have difficulties with Braille
        "B707" => "Moon",
        // Proprietary RealNetworks format. Includes Real Video packaged within a .rm RealMedia container
        "D101" => "Real Video format",
        // 
        "D102" => "Quicktime format",
        // 
        "D103" => "AVI format",
        // 
        "D104" => "Windows Media Video format",
        // 
        "D105" => "MPEG-4",
        /* Use with an applicable Product Form code D*; note that more detail of operating system requirements can be given in a Product
					Form Feature composite */
        "D201" => "MS-DOS",
        // Use with an applicable Product Form code D*; see note on D201
        "D202" => "Windows",
        // Use with an applicable Product Form code D*; see note on D201
        "D203" => "Macintosh",
        // Use with an applicable Product Form code D*; see note on D201
        "D204" => "UNIX / LINUX",
        // Use with an applicable Product Form code D*; see note on D201
        "D205" => "Other operating system(s)",
        // Use with an applicable Product Form code D*; see note on D201
        "D206" => "Palm OS",
        // Use with an applicable Product Form code D*; see note on D201
        "D207" => "Windows Mobile",
        // Use with Product Form code DE or DB as applicable
        "D301" => "Microsoft XBox",
        // Use with Product Form code DE or DB as applicable
        "D302" => "Nintendo Gameboy Color",
        // Use with Product Form code DE or DB as applicable
        "D303" => "Nintendo Gameboy Advanced",
        // Use with Product Form code DE or DB as applicable
        "D304" => "Nintendo Gameboy",
        // Use with Product Form code DE or DB as applicable
        "D305" => "Nintendo Gamecube",
        // Use with Product Form code DE or DB as applicable
        "D306" => "Nintendo 64",
        // Use with Product Form code DE or DB as applicable
        "D307" => "Sega Dreamcast",
        // Use with Product Form code DE or DB as applicable
        "D308" => "Sega Genesis/Megadrive",
        // Use with Product Form code DE or DB as applicable
        "D309" => "Sega Saturn",
        // Use with Product Form code DE or DB as applicable
        "D310" => "Sony PlayStation 1",
        // Use with Product Form code DE or DB as applicable
        "D311" => "Sony PlayStation 2",
        // 
        "D312" => "Nintendo Dual Screen",
        // 
        "D313" => "Sony PlayStation 3",
        // 
        "D314" => "Xbox 360",
        // 
        "D315" => "Nintendo Wii",
        // 
        "D316" => "Sony PlayStation Portable (PSP)",
        // No code allocated for this e-publication format yet
        "E100" => "Other",
        /* The Open Publication Structure / OPS Container Format standard of the International Digital Publishing Forum (IDPF) [File
					extension .epub] */
        "E101" => "EPUB",
        /* The Open EBook format of the IDPF, a predecessor of the full EPUB format, still (2008) supported as part of the latter [File
					extension .opf]. Includes EPUB format up to and including version 2 – but prefer code E101 for EPUB 2, and always use code
					E101 for EPUB 3 */
        "E102" => "OEB",
        // Microsoft Word binary document format [File extension .doc]
        "E103" => "DOC",
        // Office Open XML / Microsoft Word XML document format (ISO/IEC 29500:2008) [File extension .docx]
        "E104" => "DOCX",
        // HyperText Mark-up Language [File extension .html, .htm]
        "E105" => "HTML",
        // Open Document Format [File extension .odt]
        "E106" => "ODF",
        // Portable Document Format (ISO 32000-1:2008) [File extension .pdf]
        "E107" => "PDF",
        // PDF archiving format defined by ISO 19005-1:2005 [File extension .pdf]
        "E108" => "PDF/A",
        // Rich Text Format [File extension .rtf]
        "E109" => "RTF",
        // Standard Generalized Mark-up Language
        "E110" => "SGML",
        // A compressed text format mainly used on Psion handheld devices [File extension .tcr]
        "E111" => "TCR",
        // Text file format [File extension .txt]. Typically ASCII or Unicode UTF-8/16
        "E112" => "TXT",
        // Extensible Hypertext Markup Language [File extension .xhtml, .xht, .xml, .html, .htm]
        "E113" => "XHTML",
        // A compressed text format mainly used on Palm handheld devices [File extension .pdb – see also E121, E125, E130]
        "E114" => "zTXT",
        // XML Paper Specification format [File extension .xps]
        "E115" => "XPS",
        // A format proprietary to Amazon for use with its Kindle reading devices or software readers [File extensions .azw, .mobi, .prc]
        "E116" => "Amazon Kindle",
        // A Sony proprietary format for use with the Sony Reader and LIBRIé reading devices [File extension .lrf]
        "E117" => "BBeB",
        // A proprietary format for use with DXReader software
        "E118" => "DXReader",
        // A format proprietary to the Ebook Library service
        "E119" => "EBL",
        // A format proprietary to the Ebrary service
        "E120" => "Ebrary",
        /* A proprietary format for use with eReader (AKA ‘Palm Reader’) software on various hardware platforms [File extension .pdb
					– see also E114, E125, E130] */
        "E121" => "eReader",
        // A proprietary format with its own reading system for Windows platforms [File extension .exe]
        "E122" => "Exebook",
        // A proprietary format for use with the Franklin eBookman reader
        "E123" => "Franklin eBookman",
        // A proprietary format for use with the Gemstar Rocketbook reader [File extension .rb]
        "E124" => "Gemstar Rocketbook",
        /* A proprietary format for use with iSilo software on various hardware platforms [File extension .pdb – see also E114, E121,
					E130] */
        "E125" => "iSilo",
        // A proprietary format for use with Microsoft Reader software on Windows and Pocket PC platforms [File extension .lit]
        "E126" => "Microsoft Reader",
        /* A proprietary format for use with Mobipocket software on various hardware platforms [File extensions .mobi, .prc]. Includes
					Amazon Kindle formats up to and including version 7 – but prefer code E116 for version 7, and always use E116 for KF8 */
        "E127" => "Mobipocket",
        // A format proprietary to the MyiLibrary service
        "E128" => "MyiLibrary",
        // A format proprietary to the NetLibrary service
        "E129" => "NetLibrary",
        /* A proprietary format for use with Plucker reader software on Palm and other handheld devices [File extension .pdb – see also
					E114, E121, E125] */
        "E130" => "Plucker",
        // A format proprietary to the VitalSource service
        "E131" => "VitalBook",
        /* A proprietary digital product combining text and video content and available to be used online or as a downloadable application
					for a mobile device – see www.vook.com */
        "E132" => "Vook",
        /* An epublication made available by Google in association with a publisher; readable online on a browser-enabled device and
					offline on designated ebook readers */
        "E133" => "Google Edition",
        /* Epublication packaged as application for iOS (eg Apple iPhone, iPad etc), containing both executable code and content. Use
					<ProductContentType> to describe content, and <ProductFormFeatureType> to list detailed technical requirements */
        "E134" => "Book ‘app’ for iOS",
        /* Epublication packaged as application for Android (eg Android phone or tablet), containing both executable code and content.
					Use <ProductContentType> to describe content, and <ProductFormFeatureType> to list detailed technical requirements */
        "E135" => "Book ‘app’ for Android",
        /* Epublication packaged as application, containing both executable code and content. Use where other ‘app’ codes are not applicable.
					Technical requirements such as target operating system and/or device should be provided eg in <ProductFormFeatureType>. Content
					type (text or text plus various ‘enhancements’) may be described with <ProductContentType> */
        "E136" => "Book ‘app’ for other operating system",
        // Founder Apabi’s proprietary basic e-book format
        "E139" => "CEB",
        // Founder Apabi’s proprietary XML e-book format
        "E140" => "CEBX",
        // Apple’s iBook format (a proprietary extension of EPUB), can only be read on Apple iOS devices
        "E141" => "iBook",
        /* Proprietary format based on EPUB used by Barnes and Noble for fixed-format e-books, readable on NOOK devices and Nook reader
					software */
        "E142" => "ePIB",
        // Sharable Content Object Reference Model, standard content and packaging format for e-learning objects
        "E143" => "SCORM",
        // E-book Plus (proprietary Norwegian e-book format)
        "E144" => "EBP",
        /* Proprietary format based on PDF used by Barnes and Noble for fixed-format e-books, readable on some NOOK devices and Nook
					reader software */
        "E145" => "Page Perfect",
        // Use when a particular e-publication type (specified using codes E100 and upwards) has both fixed format and reflowable variants
        "E200" => "Reflowable",
        // Use when a particular e-publication type (specified using codes E100 and upwards) has both fixed format and reflowable variants
        "E201" => "Fixed format",
        // All e-publication resources are included within the e-publication package
        "E202" => "Readable offline",
        /* E-publication requires a network connection to access some resources (eg an enhanced e-book where video clips are not stored
					within the e-publication package itself, but are delivered via an internet connection) */
        "E203" => "Requires network connection",
        // Resources (eg images) present in other editions have been removed from this product, eg due to rights issues
        "E204" => "Content removed",
        // Use for fixed-format e-books optimised for landscape display. Also include an indication of the optimal screen aspect ratio
        "E210" => "Landscape",
        // Use for fixed-format e-books optimised for portrait display. Also include an indication of the optimal screen aspect ratio
        "E211" => "Portrait",
        /* Use for fixed-format e-books optimised for displays with a 5:4 aspect ratio (eg 1280x1024 pixels etc, assuming square pixels).
					Note that aspect ratio codes are NOT specific to actual screen dimensions or pixel counts, but to the ratios between two dimensions
					or two pixel counts */
        "E221" => "5:4",
        // Use for fixed-format e-books optimised for displays with a 4:3 aspect ratio (eg 800x600, 1024x768, 2048x1536 pixels etc)
        "E222" => "4:3",
        // Use for fixed-format e-books optimised for displays with a 3:2 aspect ratio (eg 960x640, 3072x2048 pixels etc)
        "E223" => "3:2",
        // Use for fixed-format e-books optimised for displays with a 16:10 aspect ratio (eg 1440x900, 2560x1600 pixels etc)
        "E224" => "16:10",
        // Use for fixed-format e-books optimised for displays with a 16:9 aspect ratio (eg 1024x576, 1920x1080, 2048x1152 pixels etc)
        "E225" => "16:9",
        // Whole product laminated (eg laminated map, fold-out chart, wallchart, etc): use B415 for book with laminated cover
        "L101" => "Laminated",
        // Use with Product Form code PC
        "P101" => "Desk calendar",
        // Use with Product Form code PC
        "P102" => "Mini calendar",
        // Use with Product Form code PC
        "P103" => "Engagement calendar",
        // Use with Product Form code PC
        "P104" => "Day by day calendar",
        // Use with Product Form code PC
        "P105" => "Poster calendar",
        // Use with Product Form code PC
        "P106" => "Wall calendar",
        // Use with Product Form code PC
        "P107" => "Perpetual calendar",
        // Use with Product Form code PC
        "P108" => "Advent calendar",
        // Use with Product Form code PC
        "P109" => "Bookmark calendar",
        // Use with Product Form code PC
        "P110" => "Student calendar",
        // Use with Product Form code PC
        "P111" => "Project calendar",
        // Use with Product Form code PC
        "P112" => "Almanac calendar",
        // A calendar that is not one of the types specified elsewhere: use with Product Form code PC
        "P113" => "Other calendar",
        /* A product that is associated with or ancillary to a calendar or organiser, eg a deskstand for a calendar, or an insert for
					an organiser: use with Product Form code PC or PS */
        "P114" => "Other calendar or organiser product",
        // Kamishibai / Cantastoria cards
        "P120" => "Picture story cards",
        // Stationery item in hardback book format
        "P201" => "Hardback (stationery)",
        // Stationery item in paperback/softback book format
        "P202" => "Paperback / softback (stationery)",
        // Stationery item in spiral-bound book format
        "P203" => "Spiral bound (stationery)",
        // Stationery item in leather-bound book format, or other fine binding
        "P204" => "Leather / fine binding (stationery)",
        // For wall map, poster, wallchart etc
        "P301" => "With hanging strips",
        // TV standard for video or DVD
        "V201" => "PAL",
        // TV standard for video or DVD
        "V202" => "NTSC",
        // TV standard for video or DVD
        "V203" => "SECAM",
        // Licensed for use in domestic contexts only
        "V220" => "Home use",
        // Licensed for use in education
        "V221" => "Classroom use",
    ];
}