<?php

namespace AragornYang\Onix\CodeLists;

class CodeList150ProductForm extends CodeList
{
    public const KEY = 'ProductForm';

    protected const MAPPING = [
        // 
        "00" => "Undefined",
        // Audio recording – detail unspecified
        "AA" => "Audio",
        // Audio cassette (analogue)
        "AB" => "Audio cassette",
        /* Audio compact disc, in any recording format: use for ‘red book’ (conventional audio CD) and SACD, and use coding in Product
					Form Detail to specify the format, if required */
        "AC" => "CD-Audio",
        // Digital audio tape cassette
        "AD" => "DAT",
        // Audio disc (excluding CD-Audio)
        "AE" => "Audio disc",
        // Audio tape (analogue open reel tape)
        "AF" => "Audio tape",
        // Sony MiniDisc format
        "AG" => "MiniDisc",
        /* Audio compact disc with part CD-ROM content, also termed CD-Plus or Enhanced-CD: use for ‘blue book’ and ‘yellow/red book’
					two-session discs */
        "AH" => "CD-Extra",
        // 
        "AI" => "DVD Audio",
        // Audio recording downloadable online
        "AJ" => "Downloadable audio file",
        // For example, Playaway audiobook and player: use coding in Product Form Detail to specify the recording format, if required
        "AK" => "Pre-recorded digital audio player",
        // For example, Audiofy audiobook chip
        "AL" => "Pre-recorded SD card",
        // Other audio format not specified by AB to AK
        "AZ" => "Other audio format",
        // Book – detail unspecified
        "BA" => "Book",
        // Hardback or cased book
        "BB" => "Hardback",
        // Paperback or other softback book
        "BC" => "Paperback / softback",
        // Loose-leaf book
        "BD" => "Loose-leaf",
        // Spiral, comb or coil bound book
        "BE" => "Spiral bound",
        /* Pamphlet or brochure, stapled; German ‘geheftet’. Includes low-extent wire-stitched books bound without a distinct spine (eg
					many comic books) */
        "BF" => "Pamphlet",
        // 
        "BG" => "Leather / fine binding",
        // Child’s book with all pages printed on board
        "BH" => "Board book",
        // Child’s book with all pages printed on textile
        "BI" => "Rag book",
        // Child’s book printed on waterproof material
        "BJ" => "Bath book",
        /* A book whose novelty consists wholly or partly in a format which cannot be described by any other available code – a ‘conventional’
					format code is always to be preferred; one or more Product Form Detail codes, eg from the B2nn group, should be used whenever
					possible to provide additional description */
        "BK" => "Novelty book",
        // Slide bound book
        "BL" => "Slide bound",
        // Extra-large format for teaching etc; this format and terminology may be specifically UK; required as a top-level differentiator
        "BM" => "Big book",
        // A part-work issued with its own ISBN and intended to be collected and bound into a complete book
        "BN" => "Part-work (fascículo)",
        // Concertina-folded book or chart, designed to fold to pocket or regular page size: use for German ‘Leporello’
        "BO" => "Fold-out book or chart",
        // A children’s book whose cover and pages are made of foam
        "BP" => "Foam book",
        // Other book format or binding not specified by BB to BO
        "BZ" => "Other book format",
        // Sheet map – detail unspecified
        "CA" => "Sheet map",
        // 
        "CB" => "Sheet map, folded",
        // 
        "CC" => "Sheet map, flat",
        // See Code List 80 for ‘rolled in tube’
        "CD" => "Sheet map, rolled",
        // Globe or planisphere
        "CE" => "Globe",
        // Other cartographic format not specified by CB to CE
        "CZ" => "Other cartographic",
        // Digital content delivered on a physical carrier (detail unspecified)
        "DA" => "Digital (on physical carrier)",
        // 
        "DB" => "CD-ROM",
        // CD interactive: use for ‘green book’ discs
        "DC" => "CD-I",
        // 
        "DE" => "Game cartridge",
        // AKA ‘floppy disc’
        "DF" => "Diskette",
        // 
        "DI" => "DVD-ROM",
        // 
        "DJ" => "Secure Digital (SD) Memory Card",
        // 
        "DK" => "Compact Flash Memory Card",
        // 
        "DL" => "Memory Stick Memory Card",
        // 
        "DM" => "USB Flash Drive",
        // Double-sided disc, one side Audio CD/CD-ROM, other side DVD
        "DN" => "Double-sided CD/DVD",
        // Other carrier of digital content not specified by DB to DN
        "DZ" => "Other digital carrier",
        // Digital content delivered electronically (delivery method unspecified)
        "EA" => "Digital (delivered electronically)",
        // Digital content available both by download and by online access
        "EB" => "Digital download and online",
        // Digital content accessed online only
        "EC" => "Digital online",
        // Digital content delivered by download only
        "ED" => "Digital download",
        // Film or transparency – detail unspecified
        "FA" => "Film or transparency",
        // Photographic transparencies mounted for projection
        "FC" => "Slides",
        // Transparencies for overhead projector
        "FD" => "OHP transparencies",
        // 
        "FE" => "Filmstrip",
        // Continuous movie film as opposed to filmstrip
        "FF" => "Film",
        // Other film or transparency format not specified by FB to FF
        "FZ" => "Other film or transparency format",
        // Digital product license (delivery method not encoded)
        "LA" => "Digital product license",
        /* Digital product license delivered through the retail supply chain as a physical ‘key’, typically a card or booklet containing
					a code enabling the purchaser to download the associated product */
        "LB" => "Digital product license key",
        /* Digital product license delivered by email or other electronic distribution, typically providing a code enabling the purchaser
					to upgrade or extend the license supplied with the associated product */
        "LC" => "Digital product license code",
        // Microform – detail unspecified
        "MA" => "Microform",
        // 
        "MB" => "Microfiche",
        // Roll microfilm
        "MC" => "Microfilm",
        // Other microform not specified by MB or MC
        "MZ" => "Other microform",
        // Miscellaneous printed material – detail unspecified
        "PA" => "Miscellaneous print",
        // May use product form detail codes P201 to P204 to specify binding
        "PB" => "Address book",
        // 
        "PC" => "Calendar",
        // Cards, flash cards (eg for teaching reading)
        "PD" => "Cards",
        // Copymasters, photocopiable sheets
        "PE" => "Copymasters",
        // May use product form detail codes P201 to P204 to specify binding
        "PF" => "Diary",
        /* Narrow strip-shaped printed sheet used mostly for education or children’s products (eg depicting alphabet, number line, procession
					of illustrated characters etc). Usually intended for horizontal display */
        "PG" => "Frieze",
        // Parts for post-purchase assembly
        "PH" => "Kit",
        // 
        "PI" => "Sheet music",
        // 
        "PJ" => "Postcard book or pack",
        // Poster for retail sale – see also XF
        "PK" => "Poster",
        /* Record book (eg ‘birthday book’, ‘baby book’): binding unspecified; may use product form detail codes P201 to P204 to specify
					binding */
        "PL" => "Record book",
        /* Wallet or folder (containing loose sheets etc): it is preferable to code the contents and treat ‘wallet’ as packaging (List
					80), but if this is not possible the product as a whole may be coded as a ‘wallet’ */
        "PM" => "Wallet or folder",
        // 
        "PN" => "Pictures or photographs",
        // 
        "PO" => "Wallchart",
        // 
        "PP" => "Stickers",
        // A book-sized (as opposed to poster-sized) sheet, usually in color or high quality print
        "PQ" => "Plate (lámina)",
        // A book with all pages blank for the buyer’s own use; may use product form detail codes P201 to P204 to specify binding
        "PR" => "Notebook / blank book",
        // May use product form detail codes P201 to P204 to specify binding
        "PS" => "Organizer",
        // 
        "PT" => "Bookmark",
        // Other printed item not specified by PB to PQ
        "PZ" => "Other printed item",
        // Presentation unspecified: format of product items must be given in <ProductPart>
        "SA" => "Multiple-item retail product",
        // Format of product items must be given in <ProductPart>
        "SB" => "Multiple-item retail product, boxed",
        // Format of product items must be given in <ProductPart>
        "SC" => "Multiple-item retail product, slip-cased",
        /* Format of product items must be given in <ProductPart>. Use code XL for a shrink-wrapped pack for trade supply, where the
					retail items it contains are intended for sale individually */
        "SD" => "Multiple-item retail product, shrinkwrapped",
        // Format of product items must be given in <ProductPart>
        "SE" => "Multiple-item retail product, loose",
        /* Multiple item product where subsidiary product part(s) is/are supplied as enclosures to the primary part, eg a book with a
					CD packaged in a sleeve glued within the back cover. Format of product items must be given in <ProductPart> */
        "SF" => "Multiple-item retail product, part(s) enclosed",
        // Video – detail unspecified
        "VA" => "Video",
        // eg Laserdisc
        "VF" => "Videodisc",
        // DVD video: specify TV standard in List 175
        "VI" => "DVD video",
        // VHS videotape: specify TV standard in List 175
        "VJ" => "VHS video",
        // Betamax videotape: specify TV standard in List 175
        "VK" => "Betamax video",
        // VideoCD
        "VL" => "VCD",
        // Super VideoCD
        "VM" => "SVCD",
        // High definition DVD disc, Toshiba HD DVD format
        "VN" => "HD DVD",
        // High definition DVD disc, Sony Blu-ray format
        "VO" => "Blu-ray",
        // Sony Universal Media disc
        "VP" => "UMD Video",
        // China Blue High-Definition, derivative of HD-DVD
        "VQ" => "CBHD",
        // Other video format not specified by VB to VP
        "VZ" => "Other video format",
        // Trade-only material (unspecified)
        "XA" => "Trade-only material",
        // 
        "XB" => "Dumpbin – empty",
        // Dumpbin with contents. ISBN (where applicable) and format of contained items must be given in Product Part
        "XC" => "Dumpbin – filled",
        // 
        "XD" => "Counterpack – empty",
        // Counterpack with contents. ISBN (where applicable) and format of contained items must be given in Product Part
        "XE" => "Counterpack – filled",
        // Promotional poster for display, not for sale – see also PK
        "XF" => "Poster, promotional",
        // 
        "XG" => "Shelf strip",
        // Promotional piece for shop window display
        "XH" => "Window piece",
        // 
        "XI" => "Streamer",
        // 
        "XJ" => "Spinner",
        // Large scale facsimile of book for promotional display
        "XK" => "Large book display",
        /* A quantity pack with its own product code, for trade supply only: the retail items it contains are intended for sale individually.
					ISBN (where applicable) and format of contained items must be given in Product Part. For products or product bundles supplied
					individually shrink-wrapped for retail sale, use code SD */
        "XL" => "Shrink-wrapped pack",
        /* A quantity pack with its own product code, for trade supply only: the retail items it contains are intended for sale individually.
					ISBN (where applicable) and format of contained items must be given in Product Part. For products or product bundles boxed
					individually for retail sale, use code SB */
        "XM" => "Boxed pack",
        // Other point of sale material not specified by XB to XL
        "XZ" => "Other point of sale",
        // General merchandise – unspecified
        "ZA" => "General merchandise",
        // 
        "ZB" => "Doll",
        // Soft or plush toy
        "ZC" => "Soft toy",
        // 
        "ZD" => "Toy",
        // Board game, or other game (except computer game: see DE)
        "ZE" => "Game",
        // 
        "ZF" => "T-shirt",
        // Dedicated e-book reading device, typically with mono screen
        "ZG" => "E-book reader",
        // General purpose tablet computer, typically with color screen
        "ZH" => "Tablet computer",
        // Dedicated audiobook player device, typically including book-related features like bookmarking
        "ZI" => "Audiobook player",
        // 
        "ZJ" => "Jigsaw",
        // 
        "ZK" => "Mug",
        // 
        "ZL" => "Tote bag",
        // Other apparel items not specified by ZB to ZJ, including promotional or branded scarves, caps, aprons etc
        "ZY" => "Other apparel",
        // Other merchandise not specified by ZB to ZY
        "ZZ" => "Other merchandise",
    ];
}